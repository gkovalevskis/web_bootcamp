<div class=main id=large>
    <div>
    <h1>Our ornaments make your life more glamorous.</h1>
    <div id = "images">
        <h3>BRACELETS</h3>
           <button onclick="toLogin()"><img width = "390px" name = "slideOne" src="../images/bracelet1.jpeg" alt=""></button>
    </div>
    <div id = "text">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
    </div> 
    <div id = "images">
        <h3>EARRINGS</h3>
        <button onclick="toLogin()"><img width = "390px" name = "slideTwo" src="../images/earrings1.jpeg" alt="">  </button>
    </div>
    <div id = "text">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
    </div> 
    <div id = "images">
        <h3>BROOCH</h3>
        <button onclick="toLogin()"><img width = "390px" name = "slideThree" src="../images/brooch1.jpeg" alt=""></button>
    </div>
    <div id = "text">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
    </div> 
    </div>
</div>
<script>
var i = 0;
var j = 0;
function slideIt(){
    let imagesOne = ["../images/bracelet1.jpeg", "../images/bracelet2.jpeg", "../images/bracelet3.jpeg"];
    let timeout = 7000;
    document.slideOne.src = imagesOne[i];
    if(i < imagesOne.length - 1){
        i++;
    }
    else{
        i = 0;
    }
    let imagesTwo = ["../images/earrings2.jpeg", "../images/earrings3.jpeg", "../images/earrings1.jpeg"];
    document.slideTwo.src = imagesTwo[i];
    if(i < imagesTwo.length - 1){
        i++;
    }
    else{
        i = 0;
    }
    let imagesThree = ["../images/brooch3.jpeg", "../images/brooch1.jpeg", "../images/brooch2.jpeg"];
    document.slideThree.src = imagesThree[j];
    if(j < imagesThree.length - 1){
        j++;
    }
    else{
        j = 0;
    }
    setTimeout("slideIt()", timeout)
}
window.onload = slideIt;

</script>
    