// Create a new app with the AngularFire module
var app = angular.module("app", ["firebase", "ngMaterial"]);

// Re-usable factory that generates the $firebaseAuth instance
app.factory("Auth", function($firebaseAuth) {
    var ref = new Firebase("https://facebookfb.firebaseio.com");
    return $firebaseAuth(ref);
});



app.controller("AuthCtrl", function($scope, $http, Auth, $firebaseArray) {



    $scope.categories = [
        { id: 1, type: 'Work' },
        { id: 2, type: 'Personal' },
        { id: 3, type: 'Others' }
    ];
    $scope.selectedCategories = { id: 2, type: 'Personal' };



    // Listens for changes in authentication state
    Auth.$onAuth(function(authData) {
        $scope.authData = authData;
        // getTodo(authData, $scope);
        if (authData) {
            // getRepos();
            // console.log(authData);
            getTodo(authData, $scope);
        }
    });

    // Logs in a user with GitHub
    $scope.login = function() {
        Auth.$authWithOAuthPopup("facebook").catch(function(error) {
            console.error("Error authenticating with fACEBOOK:", error);
        });
    };

    // Logs out the logged-in user
    $scope.logout = function() {
        Auth.$unauth();
    };


    $scope.addTask = function(authData) {
        var ref = new Firebase("https://facebookfb.firebaseio.com/");
        var usersRef = ref.child("users");
        var todo = document.getElementById('todo');
        var categories = document.getElementById('categories').value;
        console.log(categories);

        ref.onAuth(function(authData) {
            if (authData) {
                usersRef.child(authData.uid).push({
                    By: authData.facebook.displayName,
                    Todo: todo.value,
                    Categories: $scope.selectedCategories.type
                });
                todo.value = "";
                $scope.selectedCategories.type = "";
            }

        })
    };

    $scope.removeTodo = function(index,todo) {
        // var oldRef = new Firebase("https://facebookfb.firebaseio.com/");
        // var usersRef = oldRef.child("users");
        // oldRef.onAuth(function(authData) {
        //     if (authData) {
        //         var ref = new Firebase("https://facebookfb.firebaseio.com/users/" + authData.uid);
                $scope.todos.$remove(todo);
        //     }

        // })
    };




    function getTodo(authData, $scope) {
        var ref = new Firebase('https://facebookfb.firebaseio.com/users/' + authData.uid);
        $scope.todos = $firebaseArray(ref);


    };

});
