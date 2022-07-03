[![SonarCloud](https://sonarcloud.io/images/project_badges/sonarcloud-white.svg)](https://sonarcloud.io/summary/new_code?id=hhieubeehexa_webhook-php)'

# Beehexa webhook library

PHP Library, which used for pushing a message to a webhook.

### How to use the library 
```
$messageBuilder = new Beehexa\WebhookPhp\Hook\Data\MessageBuilder();
$messageBuilder->setText('product');
$messageBuilder->setEntityId('entity_id');
$messageBuilder->addField('event_name', 'update');
$messageBuilder->addField('entity_type', $this->getEntityName());
$messageBuilder->addField('entity_id', $entity->getId());
$message = $this->messageBuilder->build();

/// Sample Slack stretagy::
$hookURL = 'https://hooks.slack.com/services/xxxx/xxxx/xxxx';
$hookStrategy = Beehexa\WebhookPhp\Hook\Strategy\SlackChannel($hookURL);

$hookContext = new HookContext($hookStrategy);
$hookContext->exec($message);
```
