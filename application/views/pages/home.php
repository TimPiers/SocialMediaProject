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

  h1.icon {
    font-size: 7em;
    border-radius: 10px;
    display: inline-block;
    padding: 20px;
    margin: 0 33%;
  }

  p.info {
    width: 80%;
    margin-left: 10%;
    text-align: center;
  }
</style>

<article>
  <div class="row">
    <div class="col-12 col-md-5 col-lg-4 col-xl-3 mt-4">
        <img class="ml-5 text-center" src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/image/AppleInc/aos/published/images/i/ph/iphone8/plus/iphone8-plus-gold-select-2018?fmt=png-alpha">
    </div>

    <div class="col-12 col-md-7 col-lg-8 col-xl-9 mt-5 text-center text-md-left">
      <h1>Social Media</h1>
      <p>Het beste social media netwerk van Nederland.</p>
    </div>
  </div>
</article>

<div>
  <div class="row mt-5">
    <div class="mt-3 col-12 col-md-4">
      <h1 class="scroll icon"><i class="fa fa-fighter-jet"></i></h1>
      <h1 class="scroll text-center">Enorm snel</h1>
      <p class="scroll info">Dankzij onze goed inelkaar gezetten software, zijn wij 1 van de snelste sociale media netwerken ter wereld.</p>
    </div>

    <div class="mt-3 col-12 col-md-4">
      <h1 class="scroll icon"><i class="fa fa-palette"></i></h1>
      <h1 class="scroll text-center">Mooi design</h1>
      <p class="scroll info">Onze website is gemaakt met Bootstrap en heeft daarom een mooi en strak design.</p>
    </div>

    <div class="mt-3 col-12 col-md-4">
      <h1 class="scroll icon"><i class="fa fa-mask"></i></h1>
      <h1 class="scroll text-center">Privacy</h1>
      <p class="scroll info">Wij waarderen de privacy en veiligheid van uw gegevens, daarom gebruiken wij SSL en SHA256 encryptie om uw gegevens veilig te versleutelen.</p>
    </div>
  </div>
</div>

<article class="mt-5">
  <div class="ml-5">
    <h1 class="scroll">Dus waar wacht je nog op?</h1>
    <p>Al meer dan <span id="mensen" class="mensen">0</span></p>
    <button class="btn btn-lg btn-primary">Meld je aan</button>
  </div>
</article>

<script type="text/javascript">
  ScrollReveal().reveal('.scroll', { delay: 100 });
  const options = {
  duration: 3,
  separator: '.',
  decimal: '',
  };
  let demo = new CountUp('mensen', 10, options);
  if (!demo.error) {
    demo.start();
  } else {
    console.error(demo.error);
  }
</script>