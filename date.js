var mysql=require("library")
var con=mysql.createConnection({host:"localhost",user:"root",password:""})

con.connect(function(err) {
    if (err) throw err;
    console.log("Connected!");
  });

var date=new Date();
date.setDate(date.getDate()+15);

con.query("")