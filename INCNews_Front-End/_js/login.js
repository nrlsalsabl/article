const restlocsigup  = decodeURIComponent(getCookie("restloc_signup"));


function login(EmailUser, PasswordUser){
    $.ajax({
        type: "POST",
        url: `${restlocsigup}LoginUser`,
        cache: false,
        data: {
        EmailUser : EmailUser,
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
            window.location.href = "../INCNews_Front-End/beranda.php";
            IsResponseTrue(BackendMsg, "", false);
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

    $(".LoginDashbord").on("click", function () {
        var PasswordUser = $("#PasswordUser").val();
        var EmailUser = $("#EmailUser").val();
        login(EmailUser, PasswordUser);
    });
});