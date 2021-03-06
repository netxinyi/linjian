<?php namespace App\Services;

use Illuminate\Contracts\Pagination\Paginator as PaginatorContract;
use Illuminate\Contracts\Pagination\Presenter as PresenterContract;
use Illuminate\Pagination\BootstrapThreeNextPreviousButtonRendererTrait;
use Illuminate\Pagination\UrlWindowPresenterTrait;
use Illuminate\Pagination\UrlWindow;

class Pagination implements PresenterContract {

	use BootstrapThreeNextPreviousButtonRendererTrait, UrlWindowPresenterTrait;

	/**
	 * The paginator implementation.
	 *
	 * @var \Illuminate\Contracts\Pagination\Paginator
	 */
	protected $paginator;

	/**
	 * The URL window data structure.
	 *
	 * @var array
	 */
	protected $window;

	/**
	 * Create a new Bootstrap presenter instance.
	 *
	 * @param  \Illuminate\Contracts\Pagination\Paginator  $paginator
	 * @param  \Illuminate\Pagination\UrlWindow|null  $window
	 * @return void
	 */
	public function __construct(PaginatorContract $paginator, UrlWindow $window = null)
	{
		$this->paginator = $paginator;
		$this->window = is_null($window) ? UrlWindow::make($paginator) : $window->get();
	}

	/**
	 * Determine if the underlying paginator being presented has pages to show.
	 *
	 * @return bool
	 */
	public function hasPages()
	{
		return $this->paginator->hasPages();
	}

	/**
	 * Convert the URL window into Bootstrap HTML.
	 *
	 * @return string
	 */
	public function render()
	{


		if ($this->hasPages())
		{
			$links = $this->getLinks();
		}else{
			$links = $this->getDisabledTextWrapper('1');
		}

		return sprintf(
			'<ul class="pagination pagination-sm nomargin pagination-custom">%s %s %s</ul>',
			$this->getPreviousButton(),
			$links,
			$this->getNextButton()
		);
	}

	/**
	 * Get HTML wrapper for an available page link.
	 *
	 * @param  string  $url
	 * @param  int  $page
	 * @param  string|null  $rel
	 * @return string
	 */
	protected function getAvailablePageWrapper($url, $page, $rel = null)
	{
		$rel = is_null($rel) ? '' : ' rel="'.$rel.'"';

		return '<li><a href="'.htmlentities($url).'"'.$rel.'>'.$page.'</a></li>';
	}

	/**
	 * Get HTML wrapper for disabled text.
	 *
	 * @param  string  $text
	 * @return string
	 */
	protected function getDisabledTextWrapper($text)
	{
		return '<li class="disabled"><a href="#">'.$text.'</a></li>';
	}

	/**
	 * Get HTML wrapper for active text.
	 *
	 * @param  string  $text
	 * @return string
	 */
	protected function getActivePageWrapper($text)
	{
		return '<li class="active"><span>'.$text.'</span></li>';
	}

	/**
	 * Get a pagination "dot" element.
	 *
	 * @return string
	 */
	protected function getDots()
	{
		return $this->getDisabledTextWrapper("...");
	}

	/**
	 * Get the current page from the paginator.
	 *
	 * @return int
	 */
	protected function currentPage()
	{
		return $this->paginator->currentPage();
	}

	/**
	 * Get the last page from the paginator.
	 *
	 * @return int
	 */
	protected function lastPage()
	{
		return $this->paginator->lastPage();
	}

    /**
     * Get the previous page pagination element.
     *
     * @param  string  $text
     * @return string
     */
    protected function getPreviousButton($text = '')
    {
        // If the current page is less than or equal to one, it means we can't go any
        // further back in the pages, so we will render a disabled previous button
        // when that is the case. Otherwise, we will give it an active "status".
        if ($this->paginator->currentPage() <= 1)
        {
            return $this->getDisabledTextWrapper('<i class="fa fa-angle-double-left"></i>');
        }
        $url = $this->paginator->url(
            $this->paginator->currentPage() - 1
        );

        return $this->getAvailablePageWrapper($url,'<i class="fa fa-angle-double-left"></i>');
    }

    /**
     * Get the next page pagination element.
     *
     * @param  string  $text
     * @return string
     */
    protected function getNextButton($text = '&raquo;')
    {
        // If the current page is greater than or equal to the last page, it means we
        // can't go any further into the pages, as we're already on this last page
        // that is available, so we will make it the "next" link style disabled.
        if ( ! $this->paginator->hasMorePages())
        {
            return $this->getDisabledTextWrapper('<i class="fa fa-angle-double-right"></i>');
        }

        $url = $this->paginator->url($this->paginator->currentPage() + 1);

        return $this->getAvailablePageWrapper($url,'<i class="fa fa-angle-double-right"></i>');
    }
}
