<?php


namespace Magexo\Pos\Controller\Adminhtml\Pos;


use Magento\Backend\App\Action;
use Magento\Framework\View\Result\PageFactory;

class Index extends Action
{
    protected $resultPageFactory = false;

    public function __construct(
        Action\Context $context,
        PageFactory $resultPageFactory
    )
    {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu("Magento_Backend::content");
        $resultPage->getConfig()->getTitle()->prepend((__('Point of Sale')));

        return $resultPage;
    }
}
