function rivraddon() {
    //console.log('SIMPLAEX CODE CHALLENGE LOG rivraddon analytics.enableAnalytics ');
    console.log('SIMPLAEX CODE CHALLENGE LOG rivraddon analytics.enableAnalytics');

    analytics = function () {
        
    }
}



pbjs.que.push(function() {
    pbjs.enableAnalytics({
        provider: 'rivr',
        options: {
            clientID: 'testChallengeClientId',
            authToken: 'testChallengeauthToken',
            bannersIds: [],
            siteCategories: []
        }
    });
});



function send_data() {
    var http = new XMLHttpRequest();
    var url = 'https://tracker.simplaex-code-challenge.com/';
    //var url = './result.php';
    var params = {"eventType": "<THE_EVENT_TYPE_RECEIVED>"};

    http.open('POST', url, true);

    //Send the proper header information along with the request
    http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    http.onreadystatechange = function() {//Call a function when the state changes.
        if(http.readyState == 4 && http.status == 200) {
            //alert(http.responseText);
            document.getElementById("Result").innerHTML = http.responseText;
        }
    }
    http.send(params);
}

