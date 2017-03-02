<?hh // strict

require_once ('../vendor/autoload.php');

async function genInit(): Awaitable<void> {
  try {
    $response = await Router::genRoute();
    echo $response;
  } catch (RedirectException $e) {
    error_log($e->getTraceAsString());
    http_response_code($e->getStatusCode());
    Utils::redirect($e->getPath());
  }
}

/* HH_IGNORE_ERROR[1002] */
\HH\Asio\join(genInit());

/* test 123 */
