function IsTimeOut(cond) {
    if (cond){
      window.location.href = "./?link=loclogout";
    } else {
      Swal.fire({
        text: 'Server tidak merespon, segera hubungi Administrator di ext. 3553 !',
        timer: 3500,
        position: 'center',
        toast: true,
        showConfirmButton: false
      });
    }
  }
  
  function IsResponseFalse(primarymsg,secondarymsg,cond) {
    if(cond) {
      Swal.fire({
        html: primarymsg,
        timer: 3500,
        showConfirmButton: false
      });
    }
    console.log(secondarymsg);
  }
  
  function IsResponseTrue(primarymsg,secondarymsg,cond) {
    if(cond) {
      Swal.fire({
        html: primarymsg,
        timer: 1500,
        showConfirmButton: false
      });
    }
    console.log(secondarymsg);
  }
  
  function IsResponseTrueToast(primarymsg,secondarymsg,cond) {
    if(cond) {
      Swal.fire({
        html: primarymsg,
        timer: 1500,
        toast : true,
        showConfirmButton: false
      });
    }
    console.log(secondarymsg);
  }
  
  function IsResponseEmptyObj() {
    console.log('Fail, data kosong');
  }
  
  function IsResponseErrorElse() {
    Swal.fire({
      text: 'Ada kendal di koneksi/database, data tidak tersimpan !',
      timer: 3500,
      showConfirmButton: false
    });
  }
  
  function IsResponseElse() {
    Swal.fire({
      text: 'Error", "Server tidak merespon, segera hubungi Administrator di ext. 3553 !", "error',
      timer: 3500,
      showConfirmButton: false
    });
  }
  
  function IsSyncProcess() {
    Swal.fire({
      text: 'Tunggu, data sedang diselaraskan dengan database',
      timer: 120000,
      showConfirmButton: false,
      backdrop: `rgba(0,0,0,0.5)`,
    });
  }
  
  function IsSearchProcess(DBase) {
    Swal.fire({
      text: 'Mohon tunggu, sistem melakukan pencarian dan penyaringan data di database '+DBase,
      timer: 120000,
      showConfirmButton: false,
      backdrop: `rgba(0,0,0,0.5)`,
    });
  }
  
  function IsWaitProcess(Msg) {
    Swal.fire({
      text: 'Tunggu, '+Msg,
      timer: 120000,
      showConfirmButton: false,
      backdrop: `rgba(0,0,0,0.5)`,
    });
  }
  
  function IsSyncDone(primarymsg,secondarymsg,cond) {
    if(cond) {
      Swal.fire({
        html: primarymsg,
        timer: 1500,
        toast : true,
        showConfirmButton: false
      });
    }
    console.log(secondarymsg);
  }