#--------------------------------------------------------------------
# Example Environment Configuration file
#
# This file can be used as a starting point for your own
# custom .env files, and contains most of the possible settings
# available in a default install.
#
# By default, all of the settings are commented out. If you want
# to override the setting, you must un-comment it by removing the '#'
# at the beginning of the line.
#--------------------------------------------------------------------

#--------------------------------------------------------------------
# ENVIRONMENT
#--------------------------------------------------------------------

 CI_ENVIRONMENT = testing

#--------------------------------------------------------------------
# APP
#--------------------------------------------------------------------

# app.baseURL = ''
# If you have trouble with `.`, you could also use `_`.
# app_baseURL = ''
# app.forceGlobalSecureRequests = false
# app.CSPEnabled = false

#--------------------------------------------------------------------
# DATABASE
#--------------------------------------------------------------------

 database.default.hostname = localhost
 database.default.database = la_yaya
 database.default.username = root
 database.default.password = 
 database.default.DBDriver = MySQLi
 database.default.DBPrefix =
 database.default.port = 3306

# If you use MySQLi as tests, first update the values of Config\Database::$tests.
 database.tests.hostname = localhost
 database.tests.database = la_yaya
 database.tests.username = root
 database.tests.password = 
 database.tests.DBDriver = MySQLi
 database.tests.DBPrefix =
 database.tests.charset = utf8mb4
 database.tests.DBCollat = utf8mb4_general_ci
 database.tests.port = 3306

#--------------------------------------------------------------------
# ENCRYPTION
#--------------------------------------------------------------------

# encryption.key =

#--------------------------------------------------------------------
# SESSION
#--------------------------------------------------------------------

# session.driver = 'CodeIgniter\Session\Handlers\FileHandler'
# session.savePath = null

#--------------------------------------------------------------------
# LOGGER
#--------------------------------------------------------------------

# logger.threshold = 4

