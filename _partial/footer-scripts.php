<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/wow.js"></script>
<script>
    new WOW().init();
</script>
<script src="js/custom.js"></script>

<script>
    function isNumber(evt) {
        var iKeyCode = (evt.which) ? evt.which : evt.keyCode;
        //alert(iKeyCode);
        if (iKeyCode > 31 && (iKeyCode < 39 || iKeyCode > 57 || iKeyCode == 42 || iKeyCode == 43 || iKeyCode == 45 || iKeyCode == 47 || iKeyCode == 46) && iKeyCode != 32 && iKeyCode !== 39 && iKeyCode !== 37 && iKeyCode !== 46) {
            alert("Enter Numbers only.");
            return false;
        }
        return true;
    }

    function keycheckval(evt) {
        evt = (evt) ? evt : event;
        var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode :
            ((evt.which) ? evt.which : 0));
        if (charCode > 31 && (charCode < 65 || charCode > 90) &&
            (charCode < 97 || charCode > 122) && charCode != 32) {
            alert("Enter Letters only.");
            return false;
        }
        return true;
    }
</script>

<script>
    function checkmobile() {
        var mobile = document.getElementById("mobile");
        if (mobile.value.length != 10) {
            mobile.value = "";
            alert("Enter 10 digit Number")
        }
    }
</script>