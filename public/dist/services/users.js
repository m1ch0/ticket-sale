/**
 * Created by Muttley on 8/4/2016.
 */
'use strict';
app.factory('UserService', ['$http', '$q', function($http, $q){
    return{
        fetchAllUsers: function () {
            return $http.get('http://timska.dev/users')
                .then(
                    function (response) {
                        return response.data;
                    },
                    function (errResponse) {
                        console.log('Error while fetching all users');
                        return $q.reject(errResponse);
                    }
                )
        },
        fetchUserByName: function(user){
            return $http.get('http://timska.dev/users/'+user)
                .then(
                    function(response){
                        return response.data;
                    },
                    function(errResponse){
                        console.log('Error while fetching users');
                        return $q.reject(errResponse);
                    }
                )
        },
        editUser:function(){ // same function for update
            return $http.post('http:timska.dev/profile')
                .then(
                    function(response){
                        return response.data;
                    },
                    function(errResponse){
                        console.log('Error while editing User');
                        return $q.reject(errResponse);
                    }
                )
        }

    };
}]);