[![Quality Gate Status](https://sonarcloud.io/api/project_badges/measure?project=hhieubeehexa_webhook-php&metric=alert_status)](https://sonarcloud.io/summary/new_code?id=hhieubeehexa_webhook-php)

# Beehexa webhook library

PHP Library, which used for pushing a message to a webhook.

### How to use the library 
```
$messageBuilder = new Beehexa\WebhookPhp\Hook\Data\MessageBuilder();
$messageBuilder->setText('product');
$messageBuilder->setEntityId(123);
$messageBuilder->addField('event_name', 'update');
$messageBuilder->addField('entity_type', 'entity_type');
$messageBuilder->addField('entity_id', 'entity_id');
$message = $this->messageBuilder->build();

/// Sample Slack stretagy::
$hookURL = 'https://hooks.slack.com/services/xxxx/xxxx/xxxx';
$hookStrategy = Beehexa\WebhookPhp\Hook\Strategy\SlackChannel($hookURL);

$hookContext = new HookContext($hookStrategy);
$hookContext->exec($message);
```
