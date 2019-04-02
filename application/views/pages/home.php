<style>
  body {
    background-color: #F5E8DF; 
  }

  article {
    background-color: #222D3A; 
    width: 100%; 
    min-height: 400px;
    color: white;
  }
  footer {
    background-color: #192026;
    text-align: center;
    padding: 15px;
  }

  footer a {
      margin: 0 50px;
      color: white;
  }

  footer a:hover {
    color: ivory;
  }

  h1.icon {
    font-size: 7em;
    border-radius: 10px;
    padding: 5px;
    text-align: center;
    color: #474787;
  }

  p.info {
    width: 80%;
    margin-left: 10%;
    text-align: center;
  }

  div.signup {
    display: none;
  }

@media screen and (min-width: 768px) {
  div.signup {
    display: inline-block;
    border-top-left-radius: 50px;
    border-bottom-left-radius: 50px;
    height: 300px;
    background-image: url('https://www.brockmeyer.nl/wp-content/uploads/2018/11/Socialmedia-1140x640.jpg');
  }
}
</style>

<article>
  <div class="row scroll-fast">
    <div class="col-12 col-md-5 col-lg-4 col-xl-3 mt-4 text-center">
        <img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/image/AppleInc/aos/published/images/i/ph/iphone8/plus/iphone8-plus-gold-select-2018?fmt=png-alpha">
    </div>

    <div class="col-12 col-md-7 col-lg-8 col-xl-9 mt-5 text-center text-md-left">
      <h1>Social Media</h1>
      <p>Het beste social media netwerk van Nederland.</p>
      <a href="<?php echo base_url().'users/login'; ?>" class="btn btn-lg btn-primary mb-5">Login</a>
    </div>
  </div>
</article>

<div style="margin-top: 75px; margin-bottom: 75px;">
  <div class="row mt-5 mb-5">
    <div class="mt-3 col-12 col-md-4">
      <h1 class="scroll-fast icon text-center"><i class="fa fa-fighter-jet"></i></h1>
      <h1 class="scroll-fast text-center">Enorm snel</h1>
      <p class="scroll-slow info">Dankzij onze goed inelkaar gezetten software, zijn wij 1 van de snelste sociale media netwerken ter wereld.</p>
    </div>

    <div class="mt-3 col-12 col-md-4">
      <h1 class="scroll-fast icon"><i class="fa fa-palette"></i></h1>
      <h1 class="scroll-fast text-center">Mooi design</h1>
      <p class="scroll-slow info">Onze website is gemaakt met Bootstrap en heeft daarom een mooi en strak design.</p>
    </div>

    <div class="mt-3 col-12 col-md-4">
      <h1 class="scroll-fast icon"><i class="fa fa-mask"></i></h1>
      <h1 class="scroll-fast text-center">Privacy</h1>
      <p class="scroll-slow info">Wij waarderen de privacy en veiligheid van uw gegevens, daarom gebruiken wij SSL en SHA256 encryptie om uw gegevens veilig te versleutelen.</p>
    </div>
  </div>
</div>

<article>
<br>
<div class="row">
  <div class="scroll-late mensen col-12 offset-md-1 col-md-4 text-center text-md-left mt-5">
    <h1>Meld jezelf aan!</h1>
    <p>Al meer dan <span id="mensen">40000</span>+ mensen hebben zich aangemeld. Dus waarom jij niet?</p>
    <a href="<?php echo base_url().'users/register'; ?>" class="btn btn-lg btn-primary">Sign up</a>
  </div>

  <div class="scroll-late signup col-12 col-md-7">
    
  </div>
</div>
  
</article>

<footer>
<div class="row scroll-fast">
  <div class="col-12 col-lg-4 mt-3 mb-3">
    <a href="https://help.instagram.com/519522125107875">PRIVACY</a> 
  </div>
  <div class="col-12 col-lg-4 mt-3 mb-3">
    <a href="https://help.instagram.com/581066165581870">ALGEMENE VOORWAARDEN</a> 
  </div>
  <div class="col-12 col-lg-4 mt-3 mb-3">
    <a href="https://timpiers.net">TIMPIERS</a> 
  </div>
</footer>

<script type="text/javascript">
  ScrollReveal().reveal('.scroll-fast', { delay: 100 });
  ScrollReveal().reveal('.scroll-slow', { delay: 150 });
  ScrollReveal().reveal('.scroll-late', { delay: 300 });

  let x = setInterval(function(){ 
    if($('.mensen').attr('style') != "visibility: visible; opacity: 0;"){
      let demo = new CountUp('mensen', 40000, 50000, 0, 2, {
          separator: '.'
        });

        if (!demo.error) {
          demo.start();
        } else {
          console.error(demo.error);
        }
        clearInterval(x);
      }
  }, 1000);


</script>