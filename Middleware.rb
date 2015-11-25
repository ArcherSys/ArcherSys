module ArcherSysOS
class Middleware
  def initialize(app)
    @app = app
  end

  def call(env)
    env["rack.some_header"] = "setting an example"
    @app.call(env)
  end
end
end
