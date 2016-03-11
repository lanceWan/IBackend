<?php
namespace App\Models;
use Auth;
trait ActionAttributeTrait{
	/**
	 * 添加按钮
	 * @author 晚黎
	 * @date   2016-03-10T10:05:37+0800
	 * @return [type]                   [description]
	 */
	public function getStoreActionButton()
	{
		if (Auth::user()->can(config('admin.permissions.'.$this->action.'.create'))) {
			return '<a href="javascript:;" class="btn btn-circle btn-lg purple"><i class="fa fa-plus"></i> ' . trans("label.permission.create") . ' </a>';
		}
		return '';
	}
	/**
	 * 添加回收站/禁用按钮
	 * @author 晚黎
	 * @date   2016-03-10T10:07:20+0800
	 * @return [type]                   [description]
	 */
	public function getTrashActionButton()
	{
		if (($this->status == config('admin.status.normal')) || ($this->status == config('admin.status.audit'))) {
			if (Auth::user()->can(config('admin.permissions.'.$this->action.'.trash'))) {
				return '<a href="#" class="btn btn-xs btn-danger tooltips" data-container="body" data-original-title="' . trans('label.permission.trash') . '"  data-placement="top"><i class="fa fa-times"></i></a>';
			}
		}
		return '';
	}

	/**
	 * 彻底删除按钮
	 * @author 晚黎
	 * @date   2016-03-10T10:08:20+0800
	 * @return [type]                   [description]
	 */
	public function getDeleteActionButton()
	{
		if (($this->status == config('admin.status.trash'))) {
			if (Auth::user()->can(config('admin.permissions.'.$this->action.'.delete'))) {
				return '<a href="#" class="btn btn-xs btn-danger tooltips" data-container="body" data-original-title="' . trans('label.permission.delete') . '"  data-placement="top"><i class="fa fa-trash"></i></a>';
			}
		}
		return '';
	}
	/**
	 * 修改按钮
	 * @author 晚黎
	 * @date   2016-03-10T10:08:56+0800
	 * @return [type]                   [description]
	 */
	public function getEditActionButton()
	{
		if (Auth::user()->can(config('admin.permissions.'.$this->action.'.edit'))) {
			return '<a href="#" class="btn btn-xs btn-primary tooltips" data-original-title="' . trans('label.permission.edit') . '"  data-placement="top"><i class="fa fa-pencil"></i></a>';
		}
		return '';
	}

	/**
	 * 查看按钮
	 * @author 晚黎
	 * @date   2016-03-10T10:09:23+0800
	 * @return [type]                   [description]
	 */
	public function getShowActionButton()
	{
		if (config('admin.main.'.$this->action.'.show')) {
			if (Auth::user()->can(config('admin.permissions.'.$this->action.'.show'))) {
				return '<a href="#" class="btn btn-xs btn-info tooltips" data-container="body" data-original-title="' . trans('label.permission.show') . '"  data-placement="top"><i class="fa fa-search"></i></a>';
			}
		}
		return '';
	}
	/**
	 * 从回收站恢复到待审核状态
	 * @author 晚黎
	 * @date   2016-03-10T12:14:28+0800
	 * @return [type]                          [description]
	 */
	public function getUndoActionButton()
	{
		if (($this->status == config('admin.status.delete')) || ($this->status == config('admin.status.trash'))) {
			if (Auth::user()->can(config('admin.permissions.'.$this->action.'.undo'))) {
				return '<a href="#" class="btn btn-xs btn-danger tooltips" data-container="body" data-original-title="' . trans('label.permission.undo') . '"  data-placement="top"><i class="fa fa-reply"></i></a>';
			}
		}
		return '';
	}

	/**
	 * 通过审核按钮
	 * @author 晚黎
	 * @date   2016-03-10T12:12:44+0800
	 * @return [type]                   [description]
	 */
	public function getAuditActionButton()
	{
		if (($this->status == config('admin.status.audit'))) {
			if (Auth::user()->can(config('admin.permissions.'.$this->action.'.audit'))) {
				return '<a href="#" class="btn btn-xs btn-primary tooltips" data-container="body" data-original-title="' . trans('label.permission.audit') . '"  data-placement="top"><i class="fa fa-check"></i></a>';
			}
		}
		return '';
	}
	/**
	 * 获取所有按钮
	 * @author 晚黎
	 * @date   2016-03-10T10:52:16+0800
	 * @return [type]                   [description]
	 */
	public function getActionButtonAttribute()
	{
		return $this->getShowActionButton().
				$this->getEditActionButton().
				$this->getAuditActionButton().
				$this->getUndoActionButton().
				$this->getAuditActionButton().
				$this->getTrashActionButton().
				$this->getDeleteActionButton();
	}

	
}