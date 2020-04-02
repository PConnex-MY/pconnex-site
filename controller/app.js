var authApp = angular.module('app', ["ngRoute", "firebase"]);
// Defining Routes


authApp.factory("Auth", function ($firebaseAuth) {

    return $firebaseAuth(ref);
});

authApp.config(function ($routeProvider) {
    $routeProvider
            .when('/', {
                controller: 'LoginController',
                templateUrl: 'login.html'
            })
            .when('/login', {
                controller: 'LoginController',
                templateUrl: 'login.html'
            })
            .when('/register', {
                controller: 'RegisterController',
                templateUrl: 'register.html'
            })
            .when('/welcome', {
                controller: 'SimpleController',
                templateUrl: 'welcome.html'
            })
            .otherwise({
                redirectTo: '/login'
            });
});

authApp.controller("LoginController", ["$scope", "$firebaseAuth", function ($scope, $firebaseAuth) {
        // var ref = new Firebase("https://pconnex-membership.firebaseio.com/member");
        var ref = new Firebase("https://fbsignuptest.firebaseio.com/member");
        var auth = $firebaseAuth(ref);
        var authData = ref.getAuth();
        $scope.Login = function () {
            var em = document.getElementById("exampleInputEmail1").value;
            var pwd = document.getElementById("exampleInputPassword1").value;
            console.log(em);
            console.log(pwd);
            // create an instance of the authentication service
            auth.$authWithPassword({
                email: em,
                password: pwd
            }).then(function (authData) {
                console.log("Successfully logged in!", authData);
                alert("Welcome " + authData.uid);
            }).catch(function (error) {
                alert("Auth Failed !");
            });
        }
    }]);


authApp.controller("RegisterController", ["$scope", "$firebaseAuth", function ($scope, $firebaseAuth) {
        // var ref = new Firebase("https://fbsignuptest.firebaseio.com/member");
        // var auth = $firebaseAuth(ref);
        // $scope.Login = function() {
        //     var em = document.getElementById("exampleInputEmail1").value;
        //     var pwd = document.getElementById("exampleInputPassword1").value;
        //     console.log(email);
        //     console.log(pwd);
        //     // create an instance of the authentication service
        //     $scope.authObj.$authWithPassword({
        //         email: em,
        //         password: pwd
        //     }).then(function(authData) {
        //         console.log("Logged in as:", authData.uid);
        //     }).catch(function(error) {
        //         console.error("Authentication failed:", error);
        //     });
        // }
        var ref = new Firebase("https://fbsignuptest.firebaseio.com/");
        auth = $firebaseAuth(ref);
        var authData = ref.getAuth();
        var fundType = document.getElementById("registerFundingType").value;
        $scope.Register = function () {
            var email = document.getElementById("registerEmail").value;
            var password = document.getElementById("registerPassword").value;
            console.log(email);
            auth.$createUser({
                email: email,
                password: password
            }).then(function (userData) {
                alert("User " + userData.uid + " created successfully!");
                var usersRef = ref.child("users");
                usersRef.set({
                    email: {
                        email: email,
                        fundType: fundType,
                    },
                });
            }).then(function (authData) {
                var authData = ref.getAuth();
                console.log("Logged in as:", authData.uid);
            }).catch(function (error) {
                console.error("Error: ", error);
            });
        }
    }]);
