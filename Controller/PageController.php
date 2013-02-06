<?php

/*
 * This file is part of the Sonata package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\PageBundle\Controller;

use Sonata\PageBundle\Exception\PageNotFoundException;
use Sonata\PageBundle\Exception\InternalErrorException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

/**
 * Page controller
 *
 * @author Thomas Rabaix <thomas.rabaix@sonata-project.org>
 */
class PageController extends Controller
{
    /**
    /**
     * @return \Sonata\PageBundle\Page\PageServiceManagerInterface
     */
    protected function getPageServiceManager()
    {
        return $this->get('sonata.page.page_service_manager');
    }

    /**
     * @return \Sonata\PageBundle\CmsManager\CmsManagerInterface
     */
    protected function getCmsManager()
    {
        return $this->getCmsManagerSelector()->retrieve();
    }

    /**
     * @return \Sonata\PageBundle\CmsManager\CmsManagerSelectorInterface
     */
    protected function getCmsManagerSelector()
    {
        return $this->get('sonata.page.cms_manager_selector');
    }
}
