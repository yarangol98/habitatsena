window.fbAsyncInit = function() {
    FB.init({
        appId: '315756330053887',
        cookie: true,
        xfbml: true,
        version: 'v10.0'
    });

    FB.AppEvents.logPageView();

};

(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) {
        return;
    }
    js = d.createElement(s);
    js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

function OnLogin() {
    FB.login((Response) => {
        if (Response.authResponse) {
            FB.api('/me?fields=email,name,picture', (response) => {
                console.log(response);
                document.getElementById('id').value = response.id;
                document.getElementById('nombre').value = response.name;
                document.getElementById('correo').value = response.email;
                document.getElementById('imagen').value = response.picture.data.url;
            })
        }
    })
}