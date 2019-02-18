window.addEventListener('load', () => {

    const imgElt = document.getElementById('image');
    const saveElt = document.getElementById('save');

    createNewImg();

    document.getElementById('next').onclick = () => {
        window.location.reload();
    };

    saveElt.setAttribute("href", "fake.jpg");
    saveElt.setAttribute("download", "fake.jpg");

    function createNewImg() {
        getRequest(
            'faker.php',
            (response) => {
                imgElt.innerHTML = '';
                imgElt.innerHTML = response;
            },
            () => {
                console.log('Error : unable to create a new image.');
            }
        );
        return false;
    }

    function getRequest(url, success, error) {
        var req = false;
        try{
            // most browsers
            req = new XMLHttpRequest();
        } catch (e){
            // IE
            try{
                req = new ActiveXObject("Msxml2.XMLHTTP");
            } catch(e) {
                // try an older version
                try{
                    req = new ActiveXObject("Microsoft.XMLHTTP");
                } catch(e) {
                    return false;
                }
            }
        }
        if (!req) return false;
        if (typeof success != 'function') success = function () {};
        if (typeof error!= 'function') error = function () {};
        req.onreadystatechange = function(){
            if(req.readyState == 4) {
                return req.status === 200 ? success(req.responseText) : error(req.status);
            }
        };
        req.open("GET", url, true);
        req.send(null);
        return req;
    }
});