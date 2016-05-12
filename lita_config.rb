Lita.configure do |config|
  # The name your robot will use.
  config.robot.name = "kamaoo"

  # The locale code for the language to use.
  # config.robot.locale = :en

  # The severity of messages to log. Options are:
  # :debug, :info, :warn, :error, :fatal
  # Messages at the selected level and above will be logged.
  config.robot.log_level = :info

  # An array of user IDs that are considered administrators. These users
  # the ability to add and remove other users from authorization groups.
  # What is considered a user ID will change depending on which adapter you use.
  # config.robot.admins = ["1", "2"]

  # The adapter you want to connect with. Make sure you've added the
  # appropriate gem to the Gemfile.
  config.robot.adapter = :irc

  ## Example: Set options for the chosen adapter.
  # config.adapter.username = "myname"
  # config.adapter.password = "secret"

  ## Example: Set options for the Redis connection.
  # config.redis.host = "127.0.0.1"
  # config.redis.port = 1234

  ## Example: Set configuration for any loaded handlers. See the handler's
  ## documentation for options.
  # config.handlers.some_handler.some_config_key = "value"
  config.adapters.irc.server = "irc.freenode.net"
  config.adapters.irc.channels = ["#kamaoo", "#debian", "#debian-es","#debian-offtopic", "#debian-es-offtopic"]
  config.adapters.irc.user = "deb"
  config.adapters.irc.cinch = lambda do |cinch_config|
  cinch_config.max_reconnect_delay = 123
  config.handlers.logger.log_file = "./lita_chat.log"
  config.handlers.logger.enable_http_log = true
  end

  config.robot.admins = ["1023e900-0d75-4c34-8d63-ad8fc7db2a48"]


end
