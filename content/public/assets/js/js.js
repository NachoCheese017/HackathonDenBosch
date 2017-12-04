var request = new XMLHttpRequest();
request.open('POST', 'https://localhost/legendofthedragons/index.php');
request.onload = function() {
    var data = JSON.parse(request.responseText, true);
    console.log(data[0].foods);
};
request.send('book');