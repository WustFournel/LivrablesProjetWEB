// Intialisation of constants and variables

const express = require('express');
const ejs = require('ejs');
const paypal = require('paypal-rest-sdk');
const app =express();
const mysql = require('mysql');

var myParser = require("body-parser");
var product = "";
var id =5;

// Database connexion

const con = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "",
  database: "testpanier"
});

// Paypal configuration elements

paypal.configure({
  'mode': 'sandbox', //sandbox or live
  'client_id': 'AS6JJCafl-nuUDpKt7oeSufn41f4Qp2ymKmVhPwBE0wNzqrn6_LAodQRQ4-Rrju8fpnpT7A9NyQBeyD3',
  'client_secret': 'EHuxkesZgsAGUVZBjOeaUl29qhXU0Ybi57TFkrjuh2QfEoFfJGR1vSwL3EZvtDVVWz6iqF-GOehh1bdx'
});

//View engine

app.set('view engine', 'ejs');

app.use(myParser.urlencoded({extended : true}));

app.use(express.static(__dirname + '/public'));

//SQL request

con.connect(function(err) {
  if (err) throw err;
  con.query("SELECT nom, prix from produits INNER JOIN panier ON produits.id = panier.id_produit WHERE id_user =" + id, function (err, result, fields) {
    if (err) throw err;
    product = result;
  });
});

//Panier route

app.get("/panier", (req, res) => {
	console.log(req.body.id);
	res.render("panier", { product });
});

app.post('/pay', (req, res) => {

	const create_payment_json = {
	    "intent": "sale",
	    "payer": {
	        "payment_method": "paypal"
	    },
	    "redirect_urls": {
	        "return_url": "http://test:8888/success",
	        "cancel_url": "http://test:8888/cancel"
	    },
	    "transactions": [{
	        "item_list": {
	            "items": [
	            {
	                "name": product[0].nom,
	                "sku": "001",
	                "price": product[0].prix,
	                "currency": "EUR",
	                "quantity": 1
	            },
	            {
	                "name": product[1].nom,
	                "sku": "001",
	                "price": product[1].prix,
	                "currency": "EUR",
	                "quantity": 1
	            },
	            {
	                "name": product[2].nom,
	                "sku": "001",
	                "price": product[2].prix,
	                "currency": "EUR",
	                "quantity": 1
	            }
	            ]
	        },
	        "amount": {
	            "currency": "EUR",
	            "total": product[0].prix + product[1].prix + product[2].prix
	        },
	        "description": "A fools book"
		}]
	};

	paypal.payment.create(create_payment_json, function (error, payment) {

	    if (error) {
	        throw error;
	    } else {
	        for(let i = 0;i < payment.links.length;i++){
	        	if(payment.links[i].rel === 'approval_url'){
	        		res.redirect(payment.links[i].href);
	        	}
	        }
	    }

	});

});

//Success route

app.get('/success', (req, res) => {	
	const payerId = req.query.PayerID;
	const paymentId = req.query.paymentId;

	const execute_payment_json = {
		"payer_id": payerId,
		"transactions": [{
			"amount": {
				"currency": "EUR",
				"total": product[0].prix + product[1].prix
			}
		}]
	}

	paypal.payment.execute(paymentId, execute_payment_json, function (error, payment)  {
		if (error) {
			console.log(error.response);
			res.render('success')
			throw error;
		} else {
			console.log("Get Payment Response");
			console.log(JSON.stringify(payment));
			res.render('success')
		}
	});

});

//Cancel route

app.get('/cancel', (req, res) => res.render('cancel'));

//Server listening on port 8888

app.listen(8888, () => console.log('Server Started'));