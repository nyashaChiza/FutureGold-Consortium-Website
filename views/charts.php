<!-- TradingView Widget BEGIN -->
<?php
include_once('../views/layouts/navbar.php');
?>
   <div class="breadcrumbs py-5" data-aos="fade-in">
      <div class="container">
        <h2>Charts</h2>
        <p>Enjoy our simple and easy to use Graphic Platform for you to do your studies in the Market!</p>
       </div>
    </div>
<div class="col-lg-7  py-3 mx-auto order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
        
<div class="tradingview-widget-container mx-auto" >
  <div id="tradingview_9a218" style="height: 600px;width:95%;" ></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/NASDAQ-AAPL/" rel="noopener" target="_blank"><span class="blue-text">AAPL Chart</span></a> by TradingView</div>
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.widget(
  {
  "width": 1980,
  "height": 1110,
  "autosize": true,
  "symbol": "NASDAQ:AAPL",
  "interval": "D",
  "timezone": "Etc/UTC",
  "theme": "light",
  "style": "1",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "allow_symbol_change": true,
  "container_id": "tradingview_9a218"
}
  );
  </script>
</div> 
<!-- TradingView Widget END -->
          </div>
<?php
include_once('../views/layouts/footer.php');
?>
