app.post('/pay', (req, res) => {

	for (var i = 0, len = product.length; i < len; i++) {
	  	cart += "{\"name\": ";
        cart += product[i].nom;
        cart += ",\"sku\": \"001\",\"price\": ";   
        cart += product[i].prix;
        cart += ",\"currency\": \"EUR\",\"quantity\": 1},";
        cart_price += product[i].prix;
	}

	cart = cart.slice(0,-1);

	console.log(cart);

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
	            cart
	            ]
	        },
	        "amount": {
	            "currency": "EUR",
	            "total": cart_price
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