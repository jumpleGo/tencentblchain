   // Your web app's Firebase configuration

   var firebaseConfig = {
       apiKey: "AIzaSyCCocgP9PSQieqVuSIDIhNwb1vQai-N534",
       authDomain: "tencent-1de4b.firebaseapp.com",
       databaseURL: "https://tencent-1de4b.firebaseio.com",
       projectId: "tencent-1de4b",
       storageBucket: "tencent-1de4b.appspot.com",
       messagingSenderId: "428321762833",
       appId: "1:428321762833:web:dc09ecf2f3a8b361250bb0",
       measurementId: "G-K2NK47GW2L"
   };
   // Initialize Firebase
   firebase.initializeApp(firebaseConfig);
   const auth = firebase.auth();
   const db = firebase.firestore();

//    function simpleAuth(){
//     auth.onAuthStateChanged((user) => {
//         const setupUI = (user) => {
//             if (!user) {
//                 console.log('не зареган')
//             } else {
//                 console.log('зареган')
//                 addAmountToBalance();
//             }
//         }



//         if (user) {
//             setupUI(user);
//         } else {
//             setupUI();
//         }
//     })
//    }


   function getUid(){
    document.querySelector('.uid').value =  firebase.auth().currentUser.uid;
    document.querySelector('.order').value =  firebase.auth().currentUser.uid;
    console.log(firebase.auth().currentUser.uid)
   }
   function onAuth() {
    auth.onAuthStateChanged((user) => {
        let getTokens = document.querySelector('#get');
        let mail = document.querySelector('.user_mail_pole');
        let balance_number = document.querySelector('.balance');
        const setupUI = (user) => {
            if (!user) {
                console.log('не зареган')
            } else {
                db.collection('users').doc(user.uid).get().then(doc => {
                    let myData = doc.data();
                    let balance = myData.balance;
                    balance_number.textContent = balance;
                    if (myData.button) {
                        getTokens.style.display = "block"
                    }
                })
                mail.textContent = user.email;
                console.log('зареган')
            }
        }



        if (user) {
            setupUI(user);
        } else {
            setupUI();
        }
    })
}
   //    function notification_permission() {
   //        const messaging = firebase.messaging();
   //        messaging.usePublicVapidKey("BDYSfPRP5Vjf4TRhGRlF2S23FgtDVF0W6wmzXsxIKr1I-fYetwwanN4ELyei8lOMVmlymN-62apjOMyGlmt4ets");
   //        messaging.requestPermission().then(function () {
   //            messaging.getToken().then(function (current_token) {
   //                if (current_token) {} else {}
   //            }).catch(function (err) {
   //                console.error('retrieving token failed, analyze the error', err);
   //            });
   //        }).catch(function (err) {
   //            console.log('not premissions')
   //        })

   //        messaging.onMessage((payload) => {
   //            console.log('Message received. ', payload);

   //        });
   //    }

   function drawNotifications() {
       db.collection("notification").get().then(function (querySnapshot) {
           querySnapshot.forEach(function (doc) {
               const div = document.createElement("div");
               div.setAttribute('data-id', doc.id);
               div.className = 'data';

               const divinfo = document.createElement("div");
               divinfo.className = "info_pack";

               const divrow = document.createElement("div");
               divrow.className = "info_pack_row";


               const divrowtxt = document.createElement("div");
               divrowtxt.className = "info_pack_text";
               divrowtxt.textContent = doc.data().title;

               const divrowtext = document.createElement("div");
               divrowtext.className = "info_pack_body";
               divrowtext.textContent = doc.data().body;

               const divrowdate = document.createElement("div");
               divrowdate.className = "info_pack_date";

               //    let time = new Date();
               //    let time1 = time.setSeconds(doc.data().date.seconds, 0);
               //    divrowdate.textContent = time1;



               divrow.appendChild(divrowtxt);
               divrow.appendChild(divrowtext);
               divrow.appendChild(divrowdate);
               divinfo.appendChild(divrow);
               div.appendChild(divinfo);

               const NOTIFICATIONS = document.querySelector('.notifications');
               NOTIFICATIONS.appendChild(div);
           });
       });
   }




   //    function posts(data){
   //     db.collection('notification').doc(data).get().then(function (doc) { 
   //         let myData = doc.data();
   //         const text = document.querySelector('.text-nof');
   //         const title = document.querySelector('.title-nof');
   //         text.textContent = myData.body;
   //         title.textContent = myData.title;
   //     });


   //    }


   async function transfer() {
       let tokensFree;
       let haveTokens;
       let button;
       let secondUserBalance;
       let secondUserBalanceUsd;
       let adressInInput = document.querySelector('#hf-adress').value;
       let tokensInInput = document.querySelector('#hf-tokens').value;
       let passInInput = document.querySelector('#hf-pass').value;
       let credentials = firebase.auth.EmailAuthProvider.credential(
           firebase.auth().currentUser.email,
           passInInput
       );
       let re_auth;

       await firebase.auth().currentUser.reauthenticateWithCredential(credentials).then(function () {
           re_auth = 1;
       }).catch(function (error) {
           console.log('bad')
       });


       if (re_auth) {
           document.querySelector('.withdraw_btn').disabled = true;
           await db.collection('users').doc(firebase.auth().currentUser.uid).get().then(doc => {
               let Data = doc.data();
               haveTokens = Data.balance;
               button = Data.button
           });
           tokensFree = haveTokens - tokensInInput;


           if (tokensInInput >= 10) {


               if (tokensFree >= 0) {

                   await db.collection('users').doc(firebase.auth().currentUser.uid).set({
                       balance: tokensFree,
                       button: button
                   });
                   document.querySelector('.success_text').textContent = `You withdrawal ${tokensInInput} tokens!`;
                   await db.collection('users-second').doc(adressInInput).get().then(doc => {
                       let Data = doc.data();
                       secondUserBalance = Data.balanceToken;
                       secondUserBalanceUsd = Data.balanceUsd
                   });


                   let newSecondUserBalance = secondUserBalance + +tokensInInput;

                   await db.collection('users-second').doc(adressInInput).set({
                       balanceToken: newSecondUserBalance,
                       balanceUsd: secondUserBalanceUsd
                   });

                   await document.getElementById("snackbar").classList.add("show");
                   await setTimeout(function () {
                       document.getElementById("snackbar").className = x.className.replace("show", "");
                   }, 3000);

                   await setInterval(function () {
                       location.reload();
                   }, 2000);

               } else {

                   document.querySelector('.error_withdrawal').textContent = `You don't have ${tokensInInput} tokens`
               }

           } else {
               document.querySelector('.error_withdrawal').textContent = `Min 10 tokens`
           }
       } else {
           document.querySelector('.withdraw_btn').disabled = false;
           document.querySelector('.error_withdrawal').textContent = `Uncorrect password`
       }
   }









   async function getTokens() {
       let button;
       let oldBalance;
       await db.collection('users').doc(firebase.auth().currentUser.uid).get().then(doc => {
           let myData = doc.data();
           oldBalance = myData.balance;
           button = myData.button;
       })

       let newBalance = oldBalance + 5;
       button = 0;
       await db.collection('users').doc(firebase.auth().currentUser.uid).set({
           balance: newBalance,
           button: button
       });
       let balance_number = document.querySelector('.balance');
       balance_number.textContent = newBalance;

   }


   function onSignUp() {
       let user_mail = document.querySelector('.user_mail').value;
       let user_pass = document.querySelector('.user_pass').value;
       let email = user_mail;
       let password = user_pass;

       document.querySelector('.text_sign').textContent = "Loading";
       document.querySelector('.loader').style.display = 'block';
       firebase.auth().signInWithEmailAndPassword(email, password).then((user) => {
           location.href = "https://tenchain.tech/en-us/account.php";
           firebase.auth.Auth.Persistence.LOCAL;

       }).catch(_error => {
           document.querySelector('.text_sign').textContent = "Sign IN";
           document.querySelector('.loader').style.display = 'none';
           document.querySelector(".err").innerHTML = "uncorrect login or password";
           console.log('ошибка')
       });
   }


   function exit() {
       firebase.auth().signOut().then(() => {
           location.href = "https://tenchain.tech/en-us/"
       });

   }

  async  function addAmountToBalance(amount) {
       let currentBalance;
       let currentButton;
        console.log(amount);
      

       await db.collection('users').doc(firebase.auth().currentUser.uid).get().then(doc => {
           let myData = doc.data();
           currentBalance = myData.balance;
           currentButton = myData.button;
       });

       let newBalance = currentBalance + +amount;
       console.log(newBalance);


      await  db.collection('users').doc(firebase.auth().currentUser.uid).set({
           balance: newBalance,
           button: currentButton
       });

       document.querySelector('.success_text').textContent = `You buy ${amount} tokens!`;



   }


   function onReg() {
       let user_mail = document.querySelector('.user_mail').value;
       let user_pass = document.querySelector('.user_pass').value;
       let email = user_mail;
       let password = user_pass;

       document.querySelector('.text_sign').textContent = "Loading";
       document.querySelector('.loader').style.display = 'block';
       auth.createUserWithEmailAndPassword(email, password).then(cred => {
           let data = {
               balance: 0,
               button: 1
           };
           firebase.auth.Auth.Persistence.LOCAL;
           db.collection('users').doc(cred.user.uid).set(data);
           firebase.auth().signInWithEmailAndPassword(email, password).then((user) => {
               location.href = "https://tenchain.tech/en-us/account.php";
               firebase.auth.Auth.Persistence.LOCAL;
           });
       }).catch(function (error) {
           var errorCode = error.code;
           var errorMessage = error.message;
           document.querySelector('.text_sign').textContent = "Register";
           document.querySelector('.loader').style.display = 'none';
           if (errorCode == 'auth/weak-password') {
               document.querySelector('.err2').innerHTML = 'Пароль неверный.';
           } else {
               document.querySelector('.err2').innerHTML = errorMessage;;
           }
       })
   }



   

   function onChange(user) {
       db.collection('users').doc(user.uid).onSnapshot(function (snapshot) {
           snapshot.docChanges().forEach(function (change) {
               if (change.type === "modified") {
                   console.log("New city: ", change.doc.data());
               }

           });
       });

   }

   export {
       onSignUp,
       onReg,
       onAuth,
       exit,
       getTokens,
       onChange,
       //    notification_permission,
       drawNotifications,
       transfer,
       addAmountToBalance,
    //    simpleAuth
    getUid
   }