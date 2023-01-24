<div class="d-flex">
	<?php include ROOT.'views/inc/sidebar.php'; ?>
	<main class="w-100">
		<div class="container p-3 py-4">
			<h2>Редактировать доступы</h2>
			<div class="row">
				<!--

	data-autofill="false|hover|click"
	data-enable-paging="true"			 false = show all, no pagination
	data-items-per-page="10|15|30|50|100"

-->
				<table class="table-datatable table table-bordered table-hover table-striped"
							 data-lng-empty="No data available in table"
							 data-lng-page-info="Showing _START_ to _END_ of _TOTAL_ entries"
							 data-lng-filtered="(filtered from _MAX_ total entries)"
							 data-lng-loading="Loading..."
							 data-lng-processing="Processing..."
							 data-lng-search="Search..."
							 data-lng-norecords="No matching records found"
							 data-lng-sort-ascending=": activate to sort column ascending"
							 data-lng-sort-descending=": activate to sort column descending"

							 data-main-search="true"
							 data-column-search="false"
							 data-row-reorder="false"
							 data-col-reorder="true"
							 data-responsive="true"
							 data-header-fixed="true"
							 data-select-onclick="true"
							 data-enable-paging="true"
							 data-enable-col-sorting="true"
							 data-autofill="false"
							 data-group="false"
							 data-items-per-page="10"

							 data-enable-column-visibility="true"
							 data-lng-column-visibility="Column Visibility"

							 data-enable-export="true"
							 data-lng-export="<i class='fi fi-squared-dots fs-5 lh-1'></i>"
							 data-lng-csv="CSV"
							 data-lng-pdf="PDF"
							 data-lng-xls="XLS"
							 data-lng-copy="Copy"
							 data-lng-print="Print"
							 data-lng-all="All"
							 data-export-pdf-disable-mobile="true"
							 data-export='["csv", "pdf", "xls"]'
							 data-options='["copy", "print"]'

							 data-custom-config='{}'>
					<thead>
					<tr>
						<th>Имя</th>
						<th>Почта</th>
						<th>Добавление</th>
						<th>Редактирование</th>
						<th>Просмотр</th>
						<th>Комментирование</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>Tiger Nixon</td>
						<td>System Architect</td>
						<td>Edinburgh</td>
						<td>61</td>
						<td>2011/04/25</td>
						<td>$320,800</td>
					</tr>
					<tr>
						<td>Garrett Winters</td>
						<td>Accountant</td>
						<td>Tokyo</td>
						<td>63</td>
						<td>2011/07/25</td>
						<td>$170,750</td>
					</tr>
					<tr>
						<td>Ashton Cox</td>
						<td>Junior Technical Author</td>
						<td>San Francisco</td>
						<td>66</td>
						<td>2009/01/12</td>
						<td>$86,000</td>
					</tr>
					<tr>
						<td>Cedric Kelly</td>
						<td>Senior Javascript Developer</td>
						<td>Edinburgh</td>
						<td>22</td>
						<td>2012/03/29</td>
						<td>$433,060</td>
					</tr>
					<tr>
						<td>Airi Satou</td>
						<td>Accountant</td>
						<td>Tokyo</td>
						<td>33</td>
						<td>2008/11/28</td>
						<td>$162,700</td>
					</tr>
					<tr>
						<td>Brielle Williamson</td>
						<td>Integration Specialist</td>
						<td>New York</td>
						<td>61</td>
						<td>2012/12/02</td>
						<td>$372,000</td>
					</tr>
					<tr>
						<td>Herrod Chandler</td>
						<td>Sales Assistant</td>
						<td>San Francisco</td>
						<td>59</td>
						<td>2012/08/06</td>
						<td>$137,500</td>
					</tr>
					<tr>
						<td>Rhona Davidson</td>
						<td>Integration Specialist</td>
						<td>Tokyo</td>
						<td>55</td>
						<td>2010/10/14</td>
						<td>$327,900</td>
					</tr>
					<tr>
						<td>Colleen Hurst</td>
						<td>Javascript Developer</td>
						<td>San Francisco</td>
						<td>39</td>
						<td>2009/09/15</td>
						<td>$205,500</td>
					</tr>
					<tr>
						<td>Sonya Frost</td>
						<td>Software Engineer</td>
						<td>Edinburgh</td>
						<td>23</td>
						<td>2008/12/13</td>
						<td>$103,600</td>
					</tr>
					<tr>
						<td>Jena Gaines</td>
						<td>Office Manager</td>
						<td>London</td>
						<td>30</td>
						<td>2008/12/19</td>
						<td>$90,560</td>
					</tr>
					<tr>
						<td>Quinn Flynn</td>
						<td>Support Lead</td>
						<td>Edinburgh</td>
						<td>22</td>
						<td>2013/03/03</td>
						<td>$342,000</td>
					</tr>
					<tr>
						<td>Charde Marshall</td>
						<td>Regional Director</td>
						<td>San Francisco</td>
						<td>36</td>
						<td>2008/10/16</td>
						<td>$470,600</td>
					</tr>
					<tr>
						<td>Haley Kennedy</td>
						<td>Senior Marketing Designer</td>
						<td>London</td>
						<td>43</td>
						<td>2012/12/18</td>
						<td>$313,500</td>
					</tr>
					<tr>
						<td>Tatyana Fitzpatrick</td>
						<td>Regional Director</td>
						<td>London</td>
						<td>19</td>
						<td>2010/03/17</td>
						<td>$385,750</td>
					</tr>
					<tr>
						<td>Michael Silva</td>
						<td>Marketing Designer</td>
						<td>London</td>
						<td>66</td>
						<td>2012/11/27</td>
						<td>$198,500</td>
					</tr>
					<tr>
						<td>Paul Byrd</td>
						<td>Chief Financial Officer (CFO)</td>
						<td>New York</td>
						<td>64</td>
						<td>2010/06/09</td>
						<td>$725,000</td>
					</tr>
					<tr>
						<td>Gloria Little</td>
						<td>Systems Administrator</td>
						<td>New York</td>
						<td>59</td>
						<td>2009/04/10</td>
						<td>$237,500</td>
					</tr>
					<tr>
						<td>Bradley Greer</td>
						<td>Software Engineer</td>
						<td>London</td>
						<td>41</td>
						<td>2012/10/13</td>
						<td>$132,000</td>
					</tr>
					<tr>
						<td>Dai Rios</td>
						<td>Personnel Lead</td>
						<td>Edinburgh</td>
						<td>35</td>
						<td>2012/09/26</td>
						<td>$217,500</td>
					</tr>
					<tr>
						<td>Jenette Caldwell</td>
						<td>Development Lead</td>
						<td>New York</td>
						<td>30</td>
						<td>2011/09/03</td>
						<td>$345,000</td>
					</tr>
					<tr>
						<td>Yuri Berry</td>
						<td>Chief Marketing Officer (CMO)</td>
						<td>New York</td>
						<td>40</td>
						<td>2009/06/25</td>
						<td>$675,000</td>
					</tr>
					<tr>
						<td>Caesar Vance</td>
						<td>Pre-Sales Support</td>
						<td>New York</td>
						<td>21</td>
						<td>2011/12/12</td>
						<td>$106,450</td>
					</tr>
					<tr>
						<td>Doris Wilder</td>
						<td>Sales Assistant</td>
						<td>Sidney</td>
						<td>23</td>
						<td>2010/09/20</td>
						<td>$85,600</td>
					</tr>
					<tr>
						<td>Angelica Ramos</td>
						<td>Chief Executive Officer (CEO)</td>
						<td>London</td>
						<td>47</td>
						<td>2009/10/09</td>
						<td>$1,200,000</td>
					</tr>
					<tr>
						<td>Gavin Joyce</td>
						<td>Developer</td>
						<td>Edinburgh</td>
						<td>42</td>
						<td>2010/12/22</td>
						<td>$92,575</td>
					</tr>
					<tr>
						<td>Jennifer Chang</td>
						<td>Regional Director</td>
						<td>Singapore</td>
						<td>28</td>
						<td>2010/11/14</td>
						<td>$357,650</td>
					</tr>
					<tr>
						<td>Brenden Wagner</td>
						<td>Software Engineer</td>
						<td>San Francisco</td>
						<td>28</td>
						<td>2011/06/07</td>
						<td>$206,850</td>
					</tr>
					<tr>
						<td>Fiona Green</td>
						<td>Chief Operating Officer (COO)</td>
						<td>San Francisco</td>
						<td>48</td>
						<td>2010/03/11</td>
						<td>$850,000</td>
					</tr>
					<tr>
						<td>Shou Itou</td>
						<td>Regional Marketing</td>
						<td>Tokyo</td>
						<td>20</td>
						<td>2011/08/14</td>
						<td>$163,000</td>
					</tr>
					<tr>
						<td>Michelle House</td>
						<td>Integration Specialist</td>
						<td>Sidney</td>
						<td>37</td>
						<td>2011/06/02</td>
						<td>$95,400</td>
					</tr>
					<tr>
						<td>Suki Burks</td>
						<td>Developer</td>
						<td>London</td>
						<td>53</td>
						<td>2009/10/22</td>
						<td>$114,500</td>
					</tr>
					<tr>
						<td>Prescott Bartlett</td>
						<td>Technical Author</td>
						<td>London</td>
						<td>27</td>
						<td>2011/05/07</td>
						<td>$145,000</td>
					</tr>
					<tr>
						<td>Gavin Cortez</td>
						<td>Team Leader</td>
						<td>San Francisco</td>
						<td>22</td>
						<td>2008/10/26</td>
						<td>$235,500</td>
					</tr>
					<tr>
						<td>Martena Mccray</td>
						<td>Post-Sales support</td>
						<td>Edinburgh</td>
						<td>46</td>
						<td>2011/03/09</td>
						<td>$324,050</td>
					</tr>
					<tr>
						<td>Unity Butler</td>
						<td>Marketing Designer</td>
						<td>San Francisco</td>
						<td>47</td>
						<td>2009/12/09</td>
						<td>$85,675</td>
					</tr>
					<tr>
						<td>Howard Hatfield</td>
						<td>Office Manager</td>
						<td>San Francisco</td>
						<td>51</td>
						<td>2008/12/16</td>
						<td>$164,500</td>
					</tr>
					<tr>
						<td>Hope Fuentes</td>
						<td>Secretary</td>
						<td>San Francisco</td>
						<td>41</td>
						<td>2010/02/12</td>
						<td>$109,850</td>
					</tr>
					<tr>
						<td>Vivian Harrell</td>
						<td>Financial Controller</td>
						<td>San Francisco</td>
						<td>62</td>
						<td>2009/02/14</td>
						<td>$452,500</td>
					</tr>
					<tr>
						<td>Timothy Mooney</td>
						<td>Office Manager</td>
						<td>London</td>
						<td>37</td>
						<td>2008/12/11</td>
						<td>$136,200</td>
					</tr>
					<tr>
						<td>Jackson Bradshaw</td>
						<td>Director</td>
						<td>New York</td>
						<td>65</td>
						<td>2008/09/26</td>
						<td>$645,750</td>
					</tr>
					<tr>
						<td>Olivia Liang</td>
						<td>Support Engineer</td>
						<td>Singapore</td>
						<td>64</td>
						<td>2011/02/03</td>
						<td>$234,500</td>
					</tr>
					<tr>
						<td>Bruno Nash</td>
						<td>Software Engineer</td>
						<td>London</td>
						<td>38</td>
						<td>2011/05/03</td>
						<td>$163,500</td>
					</tr>
					<tr>
						<td>Sakura Yamamoto</td>
						<td>Support Engineer</td>
						<td>Tokyo</td>
						<td>37</td>
						<td>2009/08/19</td>
						<td>$139,575</td>
					</tr>
					<tr>
						<td>Thor Walton</td>
						<td>Developer</td>
						<td>New York</td>
						<td>61</td>
						<td>2013/08/11</td>
						<td>$98,540</td>
					</tr>
					<tr>
						<td>Finn Camacho</td>
						<td>Support Engineer</td>
						<td>San Francisco</td>
						<td>47</td>
						<td>2009/07/07</td>
						<td>$87,500</td>
					</tr>
					<tr>
						<td>Serge Baldwin</td>
						<td>Data Coordinator</td>
						<td>Singapore</td>
						<td>64</td>
						<td>2012/04/09</td>
						<td>$138,575</td>
					</tr>
					<tr>
						<td>Zenaida Frank</td>
						<td>Software Engineer</td>
						<td>New York</td>
						<td>63</td>
						<td>2010/01/04</td>
						<td>$125,250</td>
					</tr>
					<tr>
						<td>Zorita Serrano</td>
						<td>Software Engineer</td>
						<td>San Francisco</td>
						<td>56</td>
						<td>2012/06/01</td>
						<td>$115,000</td>
					</tr>
					<tr>
						<td>Jennifer Acosta</td>
						<td>Junior Javascript Developer</td>
						<td>Edinburgh</td>
						<td>43</td>
						<td>2013/02/01</td>
						<td>$75,650</td>
					</tr>
					<tr>
						<td>Cara Stevens</td>
						<td>Sales Assistant</td>
						<td>New York</td>
						<td>46</td>
						<td>2011/12/06</td>
						<td>$145,600</td>
					</tr>
					<tr>
						<td>Hermione Butler</td>
						<td>Regional Director</td>
						<td>London</td>
						<td>47</td>
						<td>2011/03/21</td>
						<td>$356,250</td>
					</tr>
					<tr>
						<td>Lael Greer</td>
						<td>Systems Administrator</td>
						<td>London</td>
						<td>21</td>
						<td>2009/02/27</td>
						<td>$103,500</td>
					</tr>
					<tr>
						<td>Jonas Alexander</td>
						<td>Developer</td>
						<td>San Francisco</td>
						<td>30</td>
						<td>2010/07/14</td>
						<td>$86,500</td>
					</tr>
					<tr>
						<td>Shad Decker</td>
						<td>Regional Director</td>
						<td>Edinburgh</td>
						<td>51</td>
						<td>2008/11/13</td>
						<td>$183,000</td>
					</tr>
					<tr>
						<td>Michael Bruce</td>
						<td>Javascript Developer</td>
						<td>Singapore</td>
						<td>29</td>
						<td>2011/06/27</td>
						<td>$183,000</td>
					</tr>
					<tr>
						<td>Donna Snider</td>
						<td>Customer Support</td>
						<td>New York</td>
						<td>27</td>
						<td>2011/01/25</td>
						<td>$112,000</td>
					</tr>
					</tbody>
					<tfoot>
					<tr>
						<th>Name</th>
						<th>Position</th>
						<th>Office</th>
						<th>Age</th>
						<th>Start date</th>
						<th>Salary</th>
					</tr>
					</tfoot>
				</table>
				</form>
			</div>
			<div class="js-form-advanced-table mb-6 js-advtablified" data-table-column-insert-before=".js-clone-before" data-table-column-insert-element="<input type=&quot;text&quot; class=&quot;form-control form-control-sm&quot; value=&quot;&quot;>" data-table-column-delete-button="<span class=&quot;btn-table-column-delete fi fi-close small cursor-pointer px-1 d-inline-block&quot;></span>" data-table-column-limit="3" data-table-row-limit="5" data-table-row-method="prepend" id="js_QHfNYulqC4">


				<!--

					ADD COLUMN

						The name of this input (name="option" in this demo)
						is used to generate input fields with names like this:
							name="option[color]"

						if no input name used, field name is generated like this:
							name="color"

				-->
				<div class="js-form-advanced-table-column-add input-group mb-3 max-w-300 dropdown">

					<!--
						Optional Plugin used:
						SOW : Search Inline
					-->
					<input type="text" name="variant" class="form-control form-control-sm input-suggest is-init iqs-input iqs-init" placeholder="Ex: color, size" aria-label="Table Cloner" aria-describedby="button-table-cloner-2" data-input-suggest-type="text" data-input-suggest-name="variant" data-input-suggest-ajax-url="_ajax/input_suggest_variants.json" data-input-suggest-ajax-method="GET" data-input-suggest-ajax-limit="100" id="js_7EO6K" data-bs-toggle="dropdown" aria-expanded="false" data-container="#dd_js_7EO6K>div"><div id="dd_js_7EO6K" class="dropdown-menu p-1 w-100" style=""><div style="max-height:200px" class="scrollable-vertical"><a href="#!" class="iqs-item dropdown-item px-2"><span>Color</span></a><a href="#!" class="iqs-item dropdown-item px-2"><span>Size</span></a><a href="#!" class="iqs-item dropdown-item px-2"><span>Material</span></a></div></div>

					<button class="btn btn-sm btn-secondary" type="button" id="button-table-cloner-2">Add</button>
				</div>


				<table class="table table-bordered table-align-middle table-sm">
					<thead>
					<tr class="small">
						<th style="width:30px">&nbsp;</th>
						<th>SKU</th>
						<th>Barcode</th>
						<th data-id="column-size" class="js-table-option"><span class="btn-table-column-delete fi fi-close small cursor-pointer px-1 d-inline-block"></span>Size</th>
						<th data-id="column-material" class="js-table-option"><span class="btn-table-column-delete fi fi-close small cursor-pointer px-1 d-inline-block"></span>Material</th>
						<th class="js-clone-before">Price</th>
						<th>Select</th>
						<th>Date</th>
						<th style="width:90px;">Image</th>
						<th style="width:80px;" class="text-center">
							<a href="#" class="btn btn-sm btn-primary btn-table-clone rounded-circle">
								<i class="fi fi-plus"></i>
							</a>
						</th>
					</tr>
					</thead>

					<!--
						See Sortable doumentation if ajax reorder is needed
					-->
					<tbody class="sortable js-sortablified" id="strand_Ejc"><tr class="js-cloned" id="clone_7QkGPH">

						<!-- sortable handler -->
						<td class="px-0 text-center">
							<div class="sortable-handle lh-1 py-2 fi fi-dots-vertical"></div>
						</td>

						<!-- SKU -->
						<td>
							<input type="text" class="form-control form-control-sm" name="variant[sku][]" value="">
						</td>

						<!-- Barcode -->
						<td>
							<input type="text" class="form-control form-control-sm" name="variant[barcode][]" value="">
						</td>



						<!-- Preadded Option 1 -->
						<td class="js-table-option column-size">
							<input type="number" class="form-control form-control-sm" name="variant[size][]" value="">
						</td>

						<!-- Preadded Option 2 -->
						<td class="js-table-option column-material">
							<input type="number" class="form-control form-control-sm" name="variant[material][]" value="">
						</td>



						<!-- Price -->
						<td class="js-clone-before">
							<input type="number" class="form-control form-control-sm" name="variant[price][]" value="">
						</td>

						<!-- Select -->
						<td>
							<select class="form-select form-select-sm" name="variant[select][]" title="Select...">
								<option value="0">Basic</option>
								<option value="1">Mustard</option>
								<option value="2">Ketchup</option>
								<option value="3">Barbecue</option>
							</select>
						</td>

						<!-- Date -->
						<td>
							<input autocomplete="off" type="text" name="variant[date][]" class="form-control form-control-sm rangepicker js-tangepickified" data-layout-rounded="false" data-single-datepicker="true" data-timepicker="false" data-timepicker-24h="true" data-timepicker-show-seconds="false" data-disable-past-dates="true" data-date-format="MM/DD/YYYY" data-disable-auto-update-input="true" data-quick-locale="{
															&quot;lang_apply&quot;	: &quot;Apply&quot;,
															&quot;lang_cancel&quot;	: &quot;Cancel&quot;,
															&quot;lang_crange&quot;	: &quot;Custom Range&quot;,
															&quot;lang_months&quot;	 : [&quot;Jan&quot;, &quot;Feb&quot;, &quot;Mar&quot;, &quot;Apr&quot;, &quot;May&quot;, &quot;Jun&quot;, &quot;Jul&quot;, &quot;Aug&quot;, &quot;Sep&quot;, &quot;Oct&quot;, &quot;Nov&quot;, &quot;Dec&quot;],
															&quot;lang_weekdays&quot; : [&quot;Su&quot;, &quot;Mo&quot;, &quot;Tu&quot;, &quot;We&quot;, &quot;Th&quot;, &quot;Fr&quot;, &quot;Sa&quot;]
														}">
						</td>

						<!-- Image -->
						<td>

							<!--

								AJAX IMAGE UPLOAD

							-->
							<label class="rounded text-center position-relative d-block cursor-pointer border border-secondary border-dashed mb-0" style="height:50px">

								<!-- remove button -->
								<a href="#" class="js-file-item-del position-absolute absolute-top start-0 z-index-3 btn btn-sm btn-secondary p-0 w--20 h--20 m-1 lh-1 text-center js-advancified hide js-table-file-remove-1_clone_1O0cEN_clone_7QkGPH" data-item-id="rand_eXW">
									<i class="fi fi-close m-0"></i>
								</a>

								<!-- image container -->
								<span class="z-index-2 d-block absolute-full z-index-1 hide-empty js-table-file-preview-1_clone_1O0cEN_clone_7QkGPH"></span>

								<!-- hidden file input -->
								<input name="variant[image][]" type="file" data-file-ext="jpg, png, gif" data-file-max-size-kb-per-file="11500" data-file-ext-err-msg="Allowed:" data-file-size-err-item-msg="File too large!" data-file-size-err-total-msg="Total allowed size exceeded!" data-file-toast-position="bottom-center" data-file-preview-container=".js-table-file-preview-1_clone_1O0cEN_clone_7QkGPH" data-file-preview-show-info="false" data-file-preview-class="rounded-circle m-0 p-0 animate-bouncein" data-file-preview-img-height="auto" data-file-btn-clear=".js-table-file-remove-1_clone_1O0cEN_clone_7QkGPH" data-file-preview-img-cover="true" data-file-ajax-upload-enable="true" data-file-ajax-upload-url="../demo.files/php/demo.ajax_file_upload.php" data-file-ajax-upload-params="['action','upload']['param2','value2']" data-file-ajax-delete-enable="true" data-file-ajax-delete-url="../demo.files/php/demo.ajax_file_upload.php" data-file-ajax-delete-params="['action','delete_file']" data-file-ajax-toast-success-txt="Successfully Uploaded!" data-file-ajax-toast-error-txt="One or more files not uploaded!" class="custom-file-input absolute-full js-advancified" data-js-advanced-identifier="2052">

								<!-- icon -->
								<span class="absolute-full d-middle">
															<i class="fi fi-image fs-1 text-muted"></i>
														</span>

							</label>

						</td>

						<!-- Option -->
						<td class="position-relative text-center">

							<!-- direct delete -->
							<!--
							<a href="#" class="btn btn-sm btn-light btn-table-clone-remove rounded-circle">
								<i class="fi fi-thrash"></i>
							</a>
							-->

							<!-- remove button (confirm trigger) -->
							<a href="#" class="btn btn-table-clone-remove-confirm btn-sm btn-light rounded-circle">
								<i class="fi fi-thrash"></i>
							</a>

							<!-- confirm -->
							<div class="position-absolute bg-warning shadow top-0 bottom-0 end-0 w-200 z-index-10 hide">
								<i class="arrow arrow-lg arrow-start arrow-center border-warning"></i>
								<label class="d-block small mb-1">Are you sure?</label>
								<a href="#" class="btn btn-table-clone-remove btn-danger btn-sm px-2 py-1">Delete</a>
								<a href="#" class="btn btn-table-clone-remove-cancel btn-secondary btn-sm px-2 py-1">Cancel</a>
							</div>

						</td>

					</tr>

					<!--
						OPTIONAL
						ACTING AS A TEMPLATE TO CLONE
						IS REMOVED ON LOAD IF .hide CLASS IS PRESENT

						Else, the first TR is used by default!
						.js-ignore = optional, used by sortable to igore from drag/drop reorder
					-->


					<!-- preadded -->
					<tr>

						<!-- sortable handler -->
						<td class="px-0 text-center">
							<div class="sortable-handle lh-1 py-2 fi fi-dots-vertical"></div>
						</td>

						<!-- SKU -->
						<td>
							<input type="text" class="form-control form-control-sm" name="variant[sku][]" value="">
						</td>

						<!-- Barcode -->
						<td>
							<input type="text" class="form-control form-control-sm" name="variant[barcode][]" value="">
						</td>



						<!-- Preadded Option 1 -->
						<td class="js-table-option column-size">
							<input type="number" class="form-control form-control-sm" name="variant[size][]" value="">
						</td>

						<!-- Preadded Option 2 -->
						<td class="js-table-option column-material">
							<input type="number" class="form-control form-control-sm" name="variant[material][]" value="">
						</td>



						<!-- Price -->
						<td class="js-clone-before">
							<input type="number" class="form-control form-control-sm" name="variant[price][]" value="">
						</td>

						<!-- Select -->
						<td>
							<select class="form-select form-select-sm" name="variant[select][]" title="Select...">
								<option value="0">Basic</option>
								<option value="1">Mustard</option>
								<option value="2">Ketchup</option>
								<option value="3">Barbecue</option>
							</select>
						</td>

						<!-- Date -->
						<td>
							<input autocomplete="off" type="text" name="variant[date][]" class="form-control form-control-sm rangepicker js-tangepickified" data-layout-rounded="false" data-single-datepicker="true" data-timepicker="false" data-timepicker-24h="true" data-timepicker-show-seconds="false" data-disable-past-dates="true" data-date-format="MM/DD/YYYY" data-disable-auto-update-input="true" data-quick-locale="{
															&quot;lang_apply&quot;	: &quot;Apply&quot;,
															&quot;lang_cancel&quot;	: &quot;Cancel&quot;,
															&quot;lang_crange&quot;	: &quot;Custom Range&quot;,
															&quot;lang_months&quot;	 : [&quot;Jan&quot;, &quot;Feb&quot;, &quot;Mar&quot;, &quot;Apr&quot;, &quot;May&quot;, &quot;Jun&quot;, &quot;Jul&quot;, &quot;Aug&quot;, &quot;Sep&quot;, &quot;Oct&quot;, &quot;Nov&quot;, &quot;Dec&quot;],
															&quot;lang_weekdays&quot; : [&quot;Su&quot;, &quot;Mo&quot;, &quot;Tu&quot;, &quot;We&quot;, &quot;Th&quot;, &quot;Fr&quot;, &quot;Sa&quot;]
														}">
						</td>

						<!-- Image -->
						<td>

							<!--

								AJAX IMAGE UPLOAD

							-->
							<label class="rounded text-center position-relative d-block cursor-pointer border border-secondary border-dashed mb-0" style="height:50px">

								<!-- remove button -->
								<a href="#" class="js-table-file-remove-1 js-file-item-del position-absolute absolute-top start-0 z-index-3 btn btn-sm btn-secondary p-0 m-1 lh-1 text-center js-advancified" style="width:20px;height:20px" data-item-id="rand_eXW">
									<i class="fi fi-close m-0"></i>
								</a>

								<!-- image container -->
								<span class="js-table-file-preview-1 z-index-2 d-block absolute-full z-index-1 hide-empty">
															<span data-id="0" data-file-name="mutzii-fmDCrqPQKog-unsplash-min.jpg" style="background-image:url('../demo.files/images/unsplash/products/sneakers/thumb_330/mutzii-fmDCrqPQKog-unsplash-min.jpg')" class="js-file-input-item d-inline-block position-relative overflow-hidden text-center m-0 p-0 animate-bouncein bg-cover w-100 h-100" id="rand_eXW">
															</span>
														</span>

								<!-- hidden file input -->
								<input name="variant[image][]" type="file" data-file-ext="jpg, png, gif" data-file-max-size-kb-per-file="11500" data-file-ext-err-msg="Allowed:" data-file-size-err-item-msg="File too large!" data-file-size-err-total-msg="Total allowed size exceeded!" data-file-toast-position="bottom-center" data-file-preview-container=".js-table-file-preview-1" data-file-preview-show-info="false" data-file-preview-class="rounded-circle m-0 p-0 animate-bouncein" data-file-preview-img-height="auto" data-file-btn-clear=".js-table-file-remove-1" data-file-preview-img-cover="true" data-file-ajax-upload-enable="true" data-file-ajax-upload-url="../demo.files/php/demo.ajax_file_upload.php" data-file-ajax-upload-params="['action','upload']['param2','value2']" data-file-ajax-delete-enable="true" data-file-ajax-delete-url="../demo.files/php/demo.ajax_file_upload.php" data-file-ajax-delete-params="['action','delete_file']" data-file-ajax-toast-success-txt="Successfully Uploaded!" data-file-ajax-toast-error-txt="One or more files not uploaded!" class="custom-file-input absolute-full js-advancified" data-js-advanced-identifier="6525" disabled="">

								<!-- icon -->
								<span class="absolute-full d-middle">
															<i class="fi fi-image fs-1 text-muted"></i>
														</span>

							</label>

						</td>

						<!-- Option -->
						<td class="position-relative text-center">

							<!-- direct delete -->
							<!--
							<a href="#" class="btn btn-sm btn-light btn-table-clone-remove rounded-circle">
								<i class="fi fi-thrash"></i>
							</a>
							-->

							<!-- remove button (confirm trigger) -->
							<a href="#" class="btn btn-table-clone-remove-confirm btn-sm btn-light rounded-circle">
								<i class="fi fi-thrash"></i>
							</a>

							<!-- confirm -->
							<div class="position-absolute bg-warning shadow top-0 bottom-0 end-0 w-200 z-index-10 hide">
								<i class="arrow arrow-lg arrow-start arrow-center border-warning"></i>
								<label class="d-block small mb-1">Are you sure?</label>
								<a href="#" class="btn btn-table-clone-remove btn-danger btn-sm px-2 py-1">Delete</a>
								<a href="#" class="btn btn-table-clone-remove-cancel btn-secondary btn-sm px-2 py-1">Cancel</a>
							</div>

						</td>

					</tr>

					<!-- preadded -->
					<tr>

						<!-- sortable handler -->
						<td class="px-0 text-center">
							<div class="sortable-handle lh-1 py-2 fi fi-dots-vertical"></div>
						</td>

						<!-- SKU -->
						<td>
							<input type="text" class="form-control form-control-sm" value="">
						</td>

						<!-- Barcode -->
						<td>
							<input type="text" class="form-control form-control-sm" value="">
						</td>



						<!-- Preadded Option 1 -->
						<td class="js-table-option column-size">
							<input type="number" class="form-control form-control-sm" name="variant[size][]" value="">
						</td>

						<!-- Preadded Option 2 -->
						<td class="js-table-option column-material">
							<input type="number" class="form-control form-control-sm" name="variant[material][]" value="">
						</td>



						<!-- Price -->
						<td class="js-clone-before">
							<input type="number" class="form-control form-control-sm" value="">
						</td>

						<!-- Select -->
						<td>
							<select class="form-select form-select-sm" name="variant[select][]" title="Select...">
								<option value="0">Basic</option>
								<option value="1">Mustard</option>
								<option value="2">Ketchup</option>
								<option value="3">Barbecue</option>
							</select>
						</td>

						<!-- Date -->
						<td>
							<input autocomplete="off" type="text" name="variant[date][]" class="form-control form-control-sm rangepicker js-tangepickified" data-layout-rounded="false" data-single-datepicker="true" data-timepicker="false" data-timepicker-24h="true" data-timepicker-show-seconds="false" data-disable-past-dates="true" data-date-format="MM/DD/YYYY" data-disable-auto-update-input="true" data-quick-locale="{
															&quot;lang_apply&quot;	: &quot;Apply&quot;,
															&quot;lang_cancel&quot;	: &quot;Cancel&quot;,
															&quot;lang_crange&quot;	: &quot;Custom Range&quot;,
															&quot;lang_months&quot;	 : [&quot;Jan&quot;, &quot;Feb&quot;, &quot;Mar&quot;, &quot;Apr&quot;, &quot;May&quot;, &quot;Jun&quot;, &quot;Jul&quot;, &quot;Aug&quot;, &quot;Sep&quot;, &quot;Oct&quot;, &quot;Nov&quot;, &quot;Dec&quot;],
															&quot;lang_weekdays&quot; : [&quot;Su&quot;, &quot;Mo&quot;, &quot;Tu&quot;, &quot;We&quot;, &quot;Th&quot;, &quot;Fr&quot;, &quot;Sa&quot;]
														}">
						</td>

						<!-- Image -->
						<td>

							<!--

								AJAX IMAGE UPLOAD

							-->
							<label class="rounded text-center position-relative d-block cursor-pointer border border-secondary border-dashed mb-0" style="height:50px">

								<!-- remove button -->
								<a href="#" class="js-table-file-remove-2 js-file-item-del position-absolute absolute-top start-0 z-index-3 btn btn-sm btn-secondary p-0 m-1 lh-1 text-center js-advancified" style="width:20px;height:20px" data-item-id="rand_e9r">
									<i class="fi fi-close m-0"></i>
								</a>

								<!-- image container -->
								<span class="js-table-file-preview-2 z-index-2 d-block absolute-full z-index-1 hide-empty">
															<span data-id="0" data-file-name="nikita-kachanovsky-ad_0wMHtvlU-unsplash-min.jpg" style="background-image:url('../demo.files/images/unsplash/products/sneakers/thumb_330/nikita-kachanovsky-ad_0wMHtvlU-unsplash-min.jpg')" class="js-file-input-item d-inline-block position-relative overflow-hidden text-center m-0 p-0 animate-bouncein bg-cover w-100 h-100" id="rand_e9r">
															</span>
														</span>

								<!-- hidden file input -->
								<input name="variant[image][]" type="file" data-file-ext="jpg, png, gif" data-file-max-size-kb-per-file="11500" data-file-ext-err-msg="Allowed:" data-file-size-err-item-msg="File too large!" data-file-size-err-total-msg="Total allowed size exceeded!" data-file-toast-position="bottom-center" data-file-preview-container=".js-table-file-preview-2" data-file-preview-show-info="false" data-file-preview-class="rounded-circle m-0 p-0 animate-bouncein" data-file-preview-img-height="auto" data-file-btn-clear=".js-table-file-remove-2" data-file-preview-img-cover="true" data-file-ajax-upload-enable="true" data-file-ajax-upload-url="../demo.files/php/demo.ajax_file_upload.php" data-file-ajax-upload-params="['action','upload']['param2','value2']" data-file-ajax-delete-enable="true" data-file-ajax-delete-url="../demo.files/php/demo.ajax_file_upload.php" data-file-ajax-delete-params="['action','delete_file']" data-file-ajax-toast-success-txt="Successfully Uploaded!" data-file-ajax-toast-error-txt="One or more files not uploaded!" class="custom-file-input absolute-full js-advancified" data-js-advanced-identifier="7259" disabled="">

								<!-- icon -->
								<span class="absolute-full d-middle">
															<i class="fi fi-image fs-1 text-muted"></i>
														</span>

							</label>

						</td>

						<!-- Option -->
						<td class="position-relative text-center">

							<!-- direct delete -->
							<!--
							<a href="#" class="btn btn-sm btn-light btn-table-clone-remove rounded-circle">
								<i class="fi fi-thrash"></i>
							</a>
							-->

							<!-- remove button (confirm trigger) -->
							<a href="#" class="btn btn-table-clone-remove-confirm btn-sm btn-light rounded-circle">
								<i class="fi fi-thrash"></i>
							</a>

							<!-- confirm -->
							<div class="position-absolute bg-warning shadow top-0 bottom-0 end-0 w-200 z-index-10 hide">
								<i class="arrow arrow-lg arrow-start arrow-center border-warning"></i>
								<label class="d-block small mb-1">Are you sure?</label>
								<a href="#" class="btn btn-table-clone-remove btn-danger btn-sm px-2 py-1">Delete</a>
								<a href="#" class="btn btn-table-clone-remove-cancel btn-secondary btn-sm px-2 py-1">Cancel</a>
							</div>

						</td>

					</tr>

					</tbody>
				</table>

			</div>
		</div>
	</main>
</div>