# Beehexa webhook library

PHP Library, which used for pushing a message to a webhook.

## Installation
### Type 1: Composer 
``composer require beehexa/webhook-php``


## How to use the library 
```
$messageBuilder = new Beehexa\WebhookPhp\Hook\Data\MessageBuilder();
$messageBuilder->setText('product');
$messageBuilder->setEntityId(123);
$messageBuilder->addField('event_name', 'update');
$messageBuilder->addField('entity_type', 'entity_type');
$messageBuilder->addField('entity_id', 'entity_id');
$message = $messageBuilder->build();

/// Sample Slack stretagy::
$hookURL = 'https://hooks.slack.com/services/xxxx/xxxx/xxxx';
$hookStrategy = new Beehexa\WebhookPhp\Hook\Strategy\SlackChannel($hookURL);

$hookContext = new \Beehexa\WebhookPhp\HookContext($hookStrategy);
$hookContext->exec($message);
```
