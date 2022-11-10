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
<div class="col-lg-8 py-2 mx-auto order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
<div class="tradingview-widget-container ">
  <div id="tradingview_aac9f" style="height: 80%px;width:100%;" ></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/EURUSD/?exchange=FOREXCOM" rel="noopener" target="_blank"><span class="blue-text">EURUSD Chart</span></a> by TradingView</div>
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.widget(
  {
  "width": 980,
  "height": 560,
  "symbol": "FOREXCOM:EURUSD",
  "interval": "D",
  "timezone": "Africa/Johannesburg",
  "theme": "light",
  "style": "1",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": true,
  "hide_side_toolbar": false,
  "allow_symbol_change": true,
  "watchlist": [
    "FOREXCOM:EURUSD",
    "FOREXCOM:EURNZD",
    "TVC:UKOIL",
    "BITSTAMP:BTCUSD",
    "FOREXCOM:GBPUSD",
    "FOREXCOM:USDJPY",
    "FOREXCOM:USDCHF",
    "TVC:DXY",
    "CURRENCYCOM:US100",
    "CURRENCYCOM:US500",
    "CURRENCYCOM:US30",
    "VANTAGE:FTSE100",
    "TVC:CAC40",
    "PEPPERSTONE:GER40",
    "XETR:DAX",
    "NASDAQ:TSLA",
    "FOREXCOM:GBPJPY",
    "FOREXCOM:EURJPY"
  ],
  "details": true,
  "hotlist": true,
  "studies": [
    "BB@tv-basicstudies"
  ],
  "show_popup_button": true,
  "popup_width": "1000",
  "popup_height": "650",
  "container_id": "tradingview_aac9f"
}
  );
  </script>
</div>

<!-- <div class="tradingview-widget-container mx-auto" >
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
          </div> -->
<?php
include_once('../views/layouts/footer.php');
?>
