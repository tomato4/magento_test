<?php


namespace Magexo\Pos\Controller\Adminhtml;


use Magento\Backend\App\Action;
use Magento\Framework\View\Result\PageFactory;

class PosView extends Action
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
        $resultPage->getConfig()->getTitle()->prepend((__('Posts')));

        return $resultPage;
    }
}
