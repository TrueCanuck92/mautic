<?php
/**
 * @package     Mautic
 * @copyright   Mautic, Inc
 * @author      Mautic, Inc
 * @link        http://allyde.com
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

namespace Mautic\WebhookBundle;

/**
 * Class MauticWebhookEvents
 * Events available for MauticWebhookBundle
 *
 * @package WebhookBundle
 */
final class WebhookEvents
{
    /**
     * The mautic.webhook_pre_save event is thrown right before a form is persisted.
     *
     * The event listener receives a Mautic\WebhookBundle\Event\WebhookBundleEvent instance.
     *
     * @var string
     */
    const WEBHOOK_PRE_SAVE   = 'mautic.webhook_pre_save';

    /**
     * The mautic.webhook_post_save event is thrown right after a form is persisted.
     *
     * The event listener receives a Mautic\WebhookBundle\Event\WebhookBundleEvent instance.
     *
     * @var string
     */
    const WEBHOOK_POST_SAVE   = 'mautic.webhook_post_save';

    /**
     * The mautic.webhook_pre_delete event is thrown before a form is deleted.
     *
     * The event listener receives a Mautic\WebhookBundle\Event\WebhookBundleEvent instance.
     *
     * @var string
     */
    const WEBHOOK_PRE_DELETE   = 'mautic.webhook_pre_delete';

    /**
     * The mautic.webhook_post_delete event is thrown after a form is deleted.
     *
     * The event listener receives a Mautic\WebhookBundle\Event\WebhookBundleEvent instance.
     *
     * @var string
     */
    const WEBHOOK_POST_DELETE   = 'mautic.webhook_post_delete';

    /**
    * The mautic.webhook_queue_on_add event is thrown as the queue entity is created, before it is persisted to the database
    *
    * The event listener receives a Mautic\WebhookBundle\Event\WebhookQueueEvent instance.
    *
    * @var string
    */
    const WEBHOOK_QUEUE_ON_ADD  = 'mautic.webhook_queue_on_add';


    /**
     * The mautic.webhook_pre_execute event is thrown right before a webhook URL is executed.
     *
     * The event listener receives a Mautic\WebhookBundle\Event\WebhookExecuteEvent instance.
     *
     * @var string
     */
    const WEBHOOK_PRE_EXECUTE   = 'mautic.webhook_pre_execute';

    /**
     * The mautic.webhook_post_execute event is thrown right after a webhook URL is executed.
     *
     * The event listener receives a Mautic\WebhookBundle\Event\WebhookExecuteEvent instance.
     *
     * @var string
     */
    const WEBHOOK_POST_EXECUTE   = 'mautic.webhook_post_execute';

    /**
     * The mautic.webhook_on_build event is as the webhook form is built.
     *
     * The event listener receives a Mautic\WebhookBundle\Event\WebhookBuild instance.
     *
     * @var string
     */
    const WEBHOOK_ON_BUILD   = 'mautic.webhook_on_build';
}