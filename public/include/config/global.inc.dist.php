<?php
$defflip = (!cfip()) ? exit(header('HTTP/1.1 401 Unauthorized')) : 1;

/**
 * Do not edit this unless you have confirmed that your config has been updated!
 *  https://github.com/MPOS/php-mpos/wiki/Config-Setup#wiki-config-version
 **/
$config['version'] = '0.0.7';

/**
 * Unless you disable this, we'll do a quick check on your config first.
 *  https://github.com/MPOS/php-mpos/wiki/Config-Setup#wiki-config-check
 */
$config['skip_config_tests'] = false;

/**
 * Defines
 *  Debug setting and salts for hashing passwords
 *   https://github.com/MPOS/php-mpos/wiki/Config-Setup#wiki-defines--salts
 */
$config['DEBUG'] = 0;
$config['SALT'] = 'PLEASEMAKEMESOMETHINGRANDOM';
$config['SALTY'] = 'THISSHOULDALSOBERRAANNDDOOM';

/**
  * Coin Algorithm
  *  Algorithm used by this coin, sha256d or scrypt
  *   https://github.com/MPOS/php-mpos/wiki/Config-Setup#wiki-algorithm
  **/
$config['algorithm'] = 'scrypt';

/**
 * Database configuration
 *  MySQL database configuration
 *   https://github.com/MPOS/php-mpos/wiki/Config-Setup#wiki-database-configuration
 **/
$config['db']['host'] = 'localhost';
$config['db']['user'] = 'someuser';
$config['db']['pass'] = 'somepass';
$config['db']['port'] = 3306;
$config['db']['name'] = 'mpos';

/**
 * Local wallet RPC
 *  RPC configuration for your daemon/wallet
 *   https://github.com/MPOS/php-mpos/wiki/Config-Setup#wiki-local-wallet-rpc
 **/
$config['wallet']['type'] = 'http';
$config['wallet']['host'] = 'localhost:19334';
$config['wallet']['username'] = 'testnet';
$config['wallet']['password'] = 'testnet';

$config['wallet_mm']['type'] = 'http';
$config['wallet_mm']['host'] = 'localhost:8066';
$config['wallet_mm']['username'] = 'testnet_mm';
$config['wallet_mm']['password'] = 'testnet_mm';

/**
 * Cold Wallet / Liquid Assets
 *  Automatically send liquid assets to a cold wallet
 *   https://github.com/MPOS/php-mpos/wiki/Config-Setup#wiki-liquid-assets--cold-wallet
 **/
$config['coldwallet']['address'] = '';
$config['coldwallet']['reserve'] = 50;
$config['coldwallet']['threshold'] = 5;

/**
 * Getting Started Config
 *  Shown to users in the 'Getting Started' section
 *   https://github.com/MPOS/php-mpos/wiki/Config-Setup#wiki-getting-started
 **/
$config['gettingstarted']['coinname'] = 'Fusioncoin';
$config['gettingstarted']['coinurl'] = 'http://pool.fusioncoin.org';
$config['gettingstarted']['stratumurl'] = '';
$config['gettingstarted']['stratumport'] = '3333';

/**
 * Ticker API
 *  Fetch exchange rates via an API
 *   https://github.com/MPOS/php-mpos/wiki/Config-Setup#wiki-ticker-api
 **/
$config['price']['url'] = 'https://btc-e.com';
$config['price']['target'] = '/api/2/ltc_usd/ticker';
$config['price']['currency'] = null;

/**
 * Automatic Payout Thresholds
 *  Minimum and Maximum auto payout amount
 *   https://github.com/MPOS/php-mpos/wiki/Config-Setup#wiki-automatic-payout-thresholds
 **/
$config['ap_threshold']['min'] = 1;
$config['ap_threshold']['max'] = 250;

$config['ap_threshold_mm']['min'] = 1;
$config['ap_threshold_mm']['max'] = 250;
/**
 * Donation thresholds
 *  Minimum donation amount in percent
 *   https://github.com/MPOS/php-mpos/wiki/Config-Setup#wiki-donation-thresholds
 **/
$config['donate_threshold']['min'] = 1;

/**
 * Account Specific Settings
 *  Settings for each user account
 *   https://github.com/MPOS/php-mpos/wiki/Config-Setup#wiki-account-specific-settings
 **/
$config['accounts']['invitations']['count'] = 5;

/**
 * Currency
 *  Shorthand name for the currency
 *   https://github.com/MPOS/php-mpos/wiki/Config-Setup#wiki-currency
 */
$config['currency'] = 'DOGE';
$config['currency_mm'] = 'FSC';

/**
 * Coin Target
 *  Target time for coins to be generated
 *   https://github.com/MPOS/php-mpos/wiki/Config-Setup#wiki-coin-target
 **/
$config['cointarget'] = '60';
$config['cointarget_mm'] = '240';
/**
 * Coin Diff Change
 *  Amount of blocks between difficulty changes
 *   https://github.com/MPOS/php-mpos/wiki/Config-Setup#wiki-coin-diff-change
 **/
$config['coindiffchangetarget'] = 2016;

/**
 * TX Fees
 *  Fees applied to transactions
 *   https://github.com/MPOS/php-mpos/wiki/Config-Setup#wiki-tx-fees
 **/
$config['txfee_auto'] = 0.001;
$config['txfee_manual'] = 0.001;

/**
 * Block Bonus
 *  Bonus in coins of block bonus
 *   https://github.com/MPOS/php-mpos/wiki/Config-Setup#wiki-block-bonus
 */
$config['block_bonus'] = 0;


/**
 * Payout System
 *  Payout system chosen
 *   https://github.com/MPOS/php-mpos/wiki/Config-Setup#wiki-payout-system
 *  prop  pplns
 **/
$config['payout_system'] = 'pplns';
$config['payout_system_mm'] = 'pps';

/**
 * Round Purging
 *  Round share purging configuration
 *   https://github.com/MPOS/php-mpos/wiki/Config-Setup#wiki-round-purging
 **/
$config['purge']['sleep'] = 1;
$config['purge']['shares'] = 25000;

/**
 * Share Archiving
 *  Share archiving configuration details
 *   https://github.com/MPOS/php-mpos/wiki/Config-Setup#wiki-archiving
 **/
$config['archive']['maxrounds'] = 10; 
$config['archive']['maxage'] = 60 * 24; 


/**
 * Pool Fees
 *  Fees applied to users
 *   https://github.com/MPOS/php-mpos/wiki/Config-Setup#wiki-pool-fees
 */
$config['fees'] = 1;
$config['fees_mm'] = 4;

/**
 * PPLNS
 *  Pay Per Last N Shares
 *   https://github.com/MPOS/php-mpos/wiki/Config-Setup#wiki-pplns-settings
 */
$config['pplns']['shares']['default'] = 4000000;
$config['pplns']['shares']['type'] = 'blockavg';
$config['pplns']['blockavg']['blockcount'] = 10;
$config['pplns']['reverse_payout'] = false;
$config['pplns']['dynamic']['percent'] = 30;

/**
 * Difficulty  sha256d: 16  scrypt: 20
 *  Difficulty setting for stratum/pushpool
 *   https://github.com/MPOS/php-mpos/wiki/Config-Setup#wiki-pool-target-difficulty
 */
$config['difficulty'] = 20;

/**
 * Block Reward
 *  Block reward configuration details
 *   https://github.com/MPOS/php-mpos/wiki/Config-Setup#wiki-reward-settings
 **/
$config['reward_type'] = 'block';
$config['reward'] = 1000;
$config['reward_mm'] = 1000;

/**
 * Confirmations
 *  Credit and Network confirmation settings
 *   https://github.com/MPOS/php-mpos/wiki/Config-Setup#wiki-confirmations
 */
$config['confirmations'] = 120;
$config['network_confirmations'] = 120;

/**
 * PPS
 *  Pay Per Share configuration details
 *   https://github.com/MPOS/php-mpos/wiki/Config-Setup#wiki-pps-settings
 **/
$config['pps']['reward']['default'] = 1000;
$config['pps']['reward']['default_mm'] = 1000;
$config['pps']['reward']['type'] = 'blockavg';
$config['pps']['blockavg']['blockcount'] = 10;

/**
 * Memcache
 *  Memcache configuration details
 *   https://github.com/MPOS/php-mpos/wiki/Config-Setup#wiki-memcache
 **/
$config['memcache']['enabled'] = true;
$config['memcache']['host'] = 'localhost';
$config['memcache']['port'] = 11211;
$config['memcache']['keyprefix'] = 'mpos_';
$config['memcache']['expiration'] = 90;
$config['memcache']['splay'] = 15;

/**
 * Cookies
 *  Cookie configuration details
 *   https://github.com/MPOS/php-mpos/wiki/Config-Setup#wiki-cookies
 **/
$config['cookie']['duration'] = '1440';
$config['cookie']['domain'] = '';
$config['cookie']['path'] = '/';
$config['cookie']['httponly'] = true;
$config['cookie']['secure'] = false;

/**
 * Smarty Cache
 *  Enable smarty cache and cache length
 *   https://github.com/MPOS/php-mpos/wiki/Config-Setup#wiki-smarty-cache
 **/
$config['smarty']['cache'] = 0;
$config['smarty']['cache_lifetime'] = 30;

/**
 * System load
 *  Disable some calls when high system load
 *   https://github.com/MPOS/php-mpos/wiki/Config-Setup#wiki-system-load
 **/
$config['system']['load']['max'] = 10.0;

?>
