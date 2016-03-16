<div ng-controller="MenuController">
	<div class="portlet light bordered">
	  <div class="portlet-title">
	      <div class="caption">
	          <i class="icon-bubble font-purple"></i>
	          <span class="caption-subject font-purple sbold uppercase">Nestable List 3</span>
	      </div>
	      <div class="actions">
	          <div class="btn-group btn-group-devided" data-toggle="buttons">
	              <label class="btn btn-transparent grey-salsa btn-circle btn-sm active">
	                  <input type="radio" name="options" class="toggle" id="option1">New</label>
	              <label class="btn btn-transparent grey-salsa btn-circle btn-sm">
	                  <input type="radio" name="options" class="toggle" id="option2">Returning</label>
	          </div>
	      </div>
	  </div>
	  <div class="portlet-body">
	      <div class="dd" id="nestable_list_3">
	          <ol class="dd-list">
	              <li class="dd-item dd3-item" data-id="13">
	                  <div class="dd-handle dd3-handle"> </div>
	                  <div class="dd3-content"> Item 13 </div>
	              </li>
	              <li class="dd-item dd3-item" data-id="14">
	                  <div class="dd-handle dd3-handle"> </div>
	                  <div class="dd3-content"> Item 14 </div>
	              </li>
	              <li class="dd-item dd3-item" data-id="15">
	                  <div class="dd-handle dd3-handle"> </div>
	                  <div class="dd3-content"> Item 15 </div>
	                  <ol class="dd-list">
	                      <li class="dd-item dd3-item" data-id="16">
	                          <div class="dd-handle dd3-handle"> </div>
	                          <div class="dd3-content"> Item 16 </div>
	                      </li>
	                      <li class="dd-item dd3-item" data-id="17">
	                          <div class="dd-handle dd3-handle"> </div>
	                          <div class="dd3-content"> Item 17 </div>
	                      </li>
	                      <li class="dd-item dd3-item" data-id="18">
	                          <div class="dd-handle dd3-handle"> </div>
	                          <div class="dd3-content"> Item 18 </div>
	                      </li>
	                  </ol>
	              </li>
	          </ol>
	      </div>
	  </div>
	</div>
</div>