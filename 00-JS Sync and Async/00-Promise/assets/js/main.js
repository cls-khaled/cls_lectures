
// let uploadVideo = new Promise((resolve, reject) => {
//   // do some operations ....
//   let completed;
      //-------- resolve and regject is built in function in Js 
      //--- عند استعداء اي منهما ينتهي ال Promise
//   // completed = true;
//   completed = false;

//   if (completed) {
//     resolve("Successfully Uploaded.");
//   } else {
//     reject("Sorry, Failed !!!");
//   }
// });

// uploadVideo
//   .then((msg) => { //---- عند تنفيذ ال promise بنجاح 
                       //---- واستدعاء ال Resolve
//     console.log("then is called: " + msg);
//   })
//   .catch((msg) => {

  //---- عند تنفيذ ال promise بفشل 
                       //---- واستدعاء ال rejected
//     console.log("catch is called: " + msg);
//   });

// ----------------------------------------------------------

let uploadVideo1 = new Promise((resolve, reject) => {
  resolve("Successfully Uploaded Video 1.");
});

let uploadVideo2 = new Promise((resolve, reject) => {
  resolve("Successfully Uploaded Video 2.");
  // reject("Failed Uploaded Video 2 !!!");
});

let uploadVideo3 = new Promise((resolve, reject) => {
  resolve("Successfully Uploaded Video 3.");
  // reject("Failed Uploaded Video 3 !!!");
});

// Promise.all([uploadVideo1, uploadVideo2, uploadVideo3])
//   .then((msgs) => {
//     console.log(msgs);
//   })
//   .catch((msgs) => {
//     console.log(msgs);
        // -- مع اول يرور يطبع الايرور ويوقف ال promise
//   });

// --------- race سباق اول ما واحد ينجح انفذه واخرج دون تنفيذ باقي العليات حتي لو ناجحه-------------------------------------------------

Promise.race([uploadVideo2, uploadVideo1, uploadVideo3])
  .then((msgs) => {
    console.log(msgs);
  })
  .catch((msgs) => {
    console.log(msgs);
  });
