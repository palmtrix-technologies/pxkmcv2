var config = {
    apiKey: "AIzaSyDXL8PAewxst00Hc-62op2d5289kcOym-8",
    authDomain: "ensurefolksbase.firebaseapp.com",
    databaseURL: "https://ensurefolksbase.firebaseio.com",
    projectId: "ensurefolksbase",
    storageBucket: "ensurefolksbase.appspot.com",
    messagingSenderId: "538809047487"
};
firebase.initializeApp(config);

//create firebase database reference
var dbRef = firebase.database();
var contactsRef = dbRef.ref('Ensureyourfolks');

contactsRef.child("Temp").on("child_added", function (snap) {
    //console.log("added", snap.key(), snap.val());


    //var Datas = snap.val();
    //  if (Datas.UserID == 1234) {
    //    alert(Datas.CurrentSegment);
    //}


});
contactsRef.child("Temp").on("child_changed", function (snap) {
    //console.log("added", snap.key(), snap.val());


    var Datas = snap.val();
  
    if (Datas.UserID == 1234)
    {
        if (Datas.CurrentSegment == "1.1") {

            window.location.href = 'BigView_Overall.html?id=1'
        } else if (Datas.CurrentSegment == "1.2") {
            window.location.href = 'BigView_Overall.html?id=2'
        }
        else {
            window.location.href = "Overall.html?id=1";
        }
    }
   

});

//var Data = contactsRef.child("Temp").push({
//    Username: "hakkem",
//    UserID: 1234 ,
//    CurrentSegment: 1.0,
//    UpdatedTime: new Date(),
    
//}).key;

//alert(Data);


function changeremort(id,value) {
    contactsRef.child("Temp").child(id).update({
        CurrentSegment: value
       

    });

}
