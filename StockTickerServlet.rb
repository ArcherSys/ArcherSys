class StockTickerServlet < WEBrick::HTTPServlet::AbstractServlet
  def do_GET request, response
    status, content_type, body = do_stuff_with request

    response.status = status
    response['Content-Type'] = content_type
    response.body = body
  end

  def do_get_price request
    tickerstock = Ticker.new("AAPL")
    tickerstock.run
    return 200, 'text/plain', tickerstock.get_price
  end
end

