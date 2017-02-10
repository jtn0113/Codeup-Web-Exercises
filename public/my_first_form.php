<!DOCTYPE html>
<html>
<head>
    <title>Delicioso</title>
    <link rel="stylesheet" href="css/my_first_form.css">
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
</head>
<body>
    <main>
        <div><img id=logo src="./img/pizza.png"></div>
        
        <div><a href="http://codeup.dev/my_first_form.php" target="_blank"><img id=orderbutton src="./img/pizza3.png"</a></div>

        <div><img id=pointing src="./img/pointing.gif"></div>

        <div id=menu>
            <a href="http://www.google.com" target="_blank">Home</a>
            <a href="https://www.google.com/search?q=pizza&biw=1280&bih=659&source=lnms&tbm=isch&sa=X&ved=0ahUKEwjXv5Xk7oHSAhWZ0YMKHVj0ApkQ_AUIBygC" target="_blank">Pizza</a>
            <a href="https://www.google.com/search?q=buffalo+wings&rlz=1C5CHFA_enUS718US718&source=lnms&tbm=isch&sa=X&ved=0ahUKEwi11Ozy7oHSAhWnhlQKHSqMAIwQ_AUICSgC&biw=1280&bih=659" target="_blank">Wings</a>
            <a href="https://www.google.com/search?q=pizza+sides&rlz=1C5CHFA_enUS718US718&source=lnms&tbm=isch&sa=X&ved=0ahUKEwiMtfb67oHSAhWmwVQKHWvUDF4Q_AUICCgB&biw=1280&bih=659" target="_blank">Sides</a>
            <a href="https://www.google.com/search?q=desserts&rlz=1C5CHFA_enUS718US718&source=lnms&tbm=isch&sa=X&ved=0ahUKEwjt77CC74HSAhXnylQKHaVuD4UQ_AUICCgB&biw=1280&bih=619" target="_blank">Desserts</a>
            <a href="https://www.google.com/search?q=drinks&rlz=1C5CHFA_enUS718US718&source=lnms&tbm=isch&sa=X&ved=0ahUKEwivgION74HSAhVDz1QKHRQoAZ8Q_AUICSgC&biw=1280&bih=619" target="_blank">Drinks</a>
        </div>

        <form class="order" method="POST" action="/my_first_form.php">
            <h1>CUSTOMIZE YOUR PIZZA</h1>
            <label for="pizza_size">Pick a size</label>
            <select id="pizza_size" name="pizza_size">
                <option>Large</option>
                <option>Medium</option>
                <option>Personal Pan Pizza</option>
            </select>
            <br>
            <label for="crust">Choose your crust</label>
            <select id="crust" name="crust">
                <option>Original Pan</option>
                <option>Hand Tossed</option>
                <option>Thin Crust</option>
                <option>Stuffed Crust</option>
            </select>
            <br>
            <label for="sauce">Choose your sauce</label>
            <select id="sauce" name="sauce">
                <option>Classic Marinara</option>
                <option>Premium Crushed Tomato</option>
                <option>Garlic Parmesean</option>
                <option>Barbeque</option>
                <option>Buffalo</option>
                <option>No Sauce</option>
            </select>
            <br>
            <hr>
            <h3>Would you like extra cheese?</h3>
            <label>
                <input type="radio" name="q1" value="yes">
                Yes, I would like extra cheese
            </label>
            <label>
                <input type="radio" name="q1" value="no">
                No, I do not want extra cheese
            </label>
            <br>
            <hr>
            <h3>Choose your toppings</h3>
            <label><input type="checkbox" id="os1" name="os[]" value="pepperoni"> Pepperoni</label>
            <label><input type="checkbox" id="os2" name="os[]" value="italian_sausage"> Italian Sausage</label>
            <label><input type="checkbox" id="os3" name="os[]" value="ham"> Ham</label>
            <label><input type="checkbox" id="os4" name="os[]" value="beef"> Beef</label>
            <br>
            <label><input type="checkbox" id="os5" name="os[]" value="onions"> Onions</label>
            <label><input type="checkbox" id="os6" name="os[]" value="mushrooms"> Mushrooms</label>
            <label><input type="checkbox" id="os7" name="os[]" value="olives"> Olives</label>
            <label><input type="checkbox" id="os8" name="os[]" value="peppers"> Peppers</label>
            <br>
            <hr>
            <h2>Your Information</h2>
            <input type="text" id="first_name" name="first_name" value="" placeholder="First Name">
            <input type="text" id="last_name" name="last_name" value="" placeholder="Last Name">
            <br>
            <input type="text" id="phone_number" name="phone_number" value="" placeholder="Phone number">
            <br>
            <input type="text" id="address" name="address" value="" placeholder="Street Address">
            <input type="text" id="City" name="City" value="" placeholder="City">
            <select id="state" name="state">
                <option value="AL">Alabama</option>
                <option value="AK">Alaska</option>
                <option value="AZ">Arizona</option>
                <option value="AR">Arkansas</option>
                <option value="CA">California</option>
                <option value="CO">Colorado</option>
                <option value="CT">Connecticut</option>
                <option value="DE">Delaware</option>
                <option value="DC">District Of Columbia</option>
                <option value="FL">Florida</option>
                <option value="GA">Georgia</option>
                <option value="HI">Hawaii</option>
                <option value="ID">Idaho</option>
                <option value="IL">Illinois</option>
                <option value="IN">Indiana</option>
                <option value="IA">Iowa</option>
                <option value="KS">Kansas</option>
                <option value="KY">Kentucky</option>
                <option value="LA">Louisiana</option>
                <option value="ME">Maine</option>
                <option value="MD">Maryland</option>
                <option value="MA">Massachusetts</option>
                <option value="MI">Michigan</option>
                <option value="MN">Minnesota</option>
                <option value="MS">Mississippi</option>
                <option value="MO">Missouri</option>
                <option value="MT">Montana</option>
                <option value="NE">Nebraska</option>
                <option value="NV">Nevada</option>
                <option value="NH">New Hampshire</option>
                <option value="NJ">New Jersey</option>
                <option value="NM">New Mexico</option>
                <option value="NY">New York</option>
                <option value="NC">North Carolina</option>
                <option value="ND">North Dakota</option>
                <option value="OH">Ohio</option>
                <option value="OK">Oklahoma</option>
                <option value="OR">Oregon</option>
                <option value="PA">Pennsylvania</option>
                <option value="RI">Rhode Island</option>
                <option value="SC">South Carolina</option>
                <option value="SD">South Dakota</option>
                <option value="TN">Tennessee</option>
                <option value="TX">Texas</option>
                <option value="UT">Utah</option>
                <option value="VT">Vermont</option>
                <option value="VA">Virginia</option>
                <option value="WA">Washington</option>
                <option value="WV">West Virginia</option>
                <option value="WI">Wisconsin</option>
                <option value="WY">Wyoming</option>
            </select>               
                    <input type="text" id="zip_code" name="zip_code" value="" placeholder="Zip Code">
            <br>
            <div>
                <button type=Submit>Continue Shopping</button>
                <button type=Submit>Proceed To Checkout</button>
            </div>
        </form>
    </main>
</body>
</html>