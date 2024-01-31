const restlocsigup  = decodeURIComponent(getCookie("restloc_signup"));


function daftar(EmailUser, UserName, PasswordUser){
    $.ajax({
        type: "POST",
        url: `${restlocsigup}SaveUser`,
        cache: false,
        data: {
        EmailUser : EmailUser,
        UserName :  UserName,
        PasswordUser: PasswordUser,
        },
        cache: false,
        success: function (response) {
          var obj = JSON.parse(response);
          var BackendMsg = obj.message;
          if (isEmpty(obj)) {
            IsResponseEmptyObj();
          } else if (obj) {
            if (obj.status == false) {
              IsResponseFalse(BackendMsg, "", true);
            } else {
                window.location.href = "../INCNews_Front-End/login.php";
              IsResponseTrue(BackendMsg, "", true);
            }
          } else {
            IsResponseErrorElse();
          }
        },
        error: function () {
        },
      });
}


$(document).ready(function () {
    $(".BackDashbord").on("click", function () {
        window.location.href = "../INCNews_Front-End/beranda.php";
    });

    $(".RegisterDashboard").on("click", function () {
        var EmailUser = $("#EmailUser").val();
        var UserName = $("#UserName").val();
        var PasswordUser = $("#PasswordUser").val();
        daftar(EmailUser, UserName, PasswordUser);
    });
});