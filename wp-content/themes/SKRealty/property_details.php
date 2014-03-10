<?php

/*

Template Name: Properties details

*/

?>


				<table id="property-details">
				<?php if ( get_post_meta($post->ID, 'Age', true) ) { ?><tr><td class="prop-title"><b>Age:</b></td> <td class="prop-info"> <?php echo get_post_meta($post->ID, "Age", $single = true); ?></td></tr><?php } ?>
				<?php if ( get_post_meta($post->ID, 'Bay Spacing', true) ) { ?><tr><td class="prop-title"><b>Bay Spacing: <?php echo get_post_meta($post->ID, "Bay Spacing", $single = true); ?></td></tr><?php } ?>
				<?php if ( get_post_meta($post->ID, 'City, State, Zip Code', true) ) { ?><tr><td class="prop-title"><b>City, State, Zip Code:</b></td> <td class="prop-info"> <?php echo get_post_meta($post->ID, "City, State, Zip Code", $single = true); ?></td></tr><?php } ?>
				<?php if ( get_post_meta($post->ID, 'Building Size', true) ) { ?><tr><td class="prop-title"><b>Building Size:</b></td> <td class="prop-info"> <?php echo get_post_meta($post->ID, "Building Size", $single = true); ?></td></tr><?php } ?>
				<?php if ( get_post_meta($post->ID, 'Building Frame', true) ) { ?><tr><td class="prop-title"><b>Building Frame:</b></td> <td class="prop-info"> <?php echo get_post_meta($post->ID, "Building Frame", $single = true); ?></td></tr><?php } ?>
				<?php if ( get_post_meta($post->ID, 'Clear Height', true) ) { ?><tr><td class="prop-title"><b>Building Frame:</b></td> <td class="prop-info"> <?php echo get_post_meta($post->ID, "Building Frame", $single = true); ?></td></tr><?php } ?>
				<?php if ( get_post_meta($post->ID, 'Ce<tr><td>g Heights', true) ) { ?><tr><td class="prop-title"><b>Ce<tr><td>g Heights:</b></td> <td class="prop-info"> <?php echo get_post_meta($post->ID, "Ce<tr><td>g Heights", $single = true); ?></td></tr><?php } ?>
				<?php if ( get_post_meta($post->ID, 'Column Spacing', true) ) { ?><tr><td class="prop-title"><b>Column Spacing:</b></td> <td class="prop-info"> <?php echo get_post_meta($post->ID, "Column Spacing", $single = true); ?></td></tr><?php } ?>
				<?php if ( get_post_meta($post->ID, 'Construction Date', true) ) { ?><tr><td class="prop-title"><b>Construction Date:</b></td> <td class="prop-info"> <?php echo get_post_meta($post->ID, "Construction Date", $single = true); ?></td></tr><?php } ?>
				<?php if ( get_post_meta($post->ID, 'Description', true) ) { ?><tr><td class="prop-title"><b>Description:</b></td> <td class="prop-info"> <?php echo get_post_meta($post->ID, "Description", $single = true); ?></td></tr><?php } ?>
				<?php if ( get_post_meta($post->ID, 'Docks', true) ) { ?><tr><td class="prop-title"><b>Docks:</b></td> <td class="prop-info"> <?php echo get_post_meta($post->ID, "Docks", $single = true); ?></td></tr><?php } ?>
				<?php if ( get_post_meta($post->ID, 'Electrical', true) ) { ?><tr><td class="prop-title"><b>Electrical: <?php echo get_post_meta($post->ID, "Electrical", $single = true); ?></td></tr><?php } ?>
				<?php if ( get_post_meta($post->ID, 'Fire Protection', true) ) { ?><tr><td class="prop-title"><b>Fire Protection:</b></td> <td class="prop-info"> <?php echo get_post_meta($post->ID, "Fire Protection", $single = true); ?></td></tr><?php } ?>
				<?php if ( get_post_meta($post->ID, 'Foundation', true) ) { ?><tr><td class="prop-title"><b>Foundation:</b></td> <td class="prop-info"> <?php echo get_post_meta($post->ID, "Foundation", $single = true); ?></td></tr><?php } ?>
				<?php if ( get_post_meta($post->ID, 'Frame', true) ) { ?><tr><td class="prop-title"><b>Frame:</b></td> <td class="prop-info"> <?php echo get_post_meta($post->ID, "Frame", $single = true); ?></td></tr><?php } ?>
				<?php if ( get_post_meta($post->ID, 'Gross Building Area', true) ) { ?><tr><td class="prop-title"><b>Gross Building Area:</b></td> <td class="prop-info"> <?php echo get_post_meta($post->ID, "Gross Building Area", $single = true); ?></td></tr><?php } ?>
				<?php if ( get_post_meta($post->ID, 'Improvement Description', true) ) { ?><tr><td class="prop-title"><b>Improvement Description:</b></td> <td class="prop-info"> <?php echo get_post_meta($post->ID, "Improvement Description", $single = true); ?></td></tr><?php } ?>
				<?php if ( get_post_meta($post->ID, 'Land Area', true) ) { ?><tr><td class="prop-title"><b>Land Area:</b></td> <td class="prop-info"> <?php echo get_post_meta($post->ID, "Land Area", $single = true); ?></td></tr><?php } ?>
				<?php if ( get_post_meta($post->ID, 'Lease Term', true) ) { ?><tr><td class="prop-title"><b>Lease Term:</b></td> <td class="prop-info"> <?php echo get_post_meta($post->ID, "BLease Term", $single = true); ?></td></tr><?php } ?>
				<?php if ( get_post_meta($post->ID, 'Lease Type', true) ) { ?><tr><td class="prop-title"><b>Lease Type:</b></td> <td class="prop-info"> <?php echo get_post_meta($post->ID, "Lease Type", $single = true); ?></td></tr><?php } ?>
				<?php if ( get_post_meta($post->ID, 'Loading Areas', true) ) { ?><tr><td class="prop-title"><b>Loading Areas:</b></td> <td class="prop-info"> <?php echo get_post_meta($post->ID, "Loading Areas", $single = true); ?></td></tr><?php } ?>
				<?php if ( get_post_meta($post->ID, 'Loading Doors', true) ) { ?><tr><td class="prop-title"><b>Loading Doors:</b></td> <td class="prop-info"> <?php echo get_post_meta($post->ID, "Loading Doors", $single = true); ?></td></tr><?php } ?>
				<?php if ( get_post_meta($post->ID, 'Lot Size', true) ) { ?><tr><td class="prop-title"><b>Lot Size:</b></td> <td class="prop-info"> <?php echo get_post_meta($post->ID, "Lot Size", $single = true); ?></td></tr><?php } ?>
				<?php if ( get_post_meta($post->ID, 'Minimum Clear Height', true) ) { ?><tr><td class="prop-title"><b>Minimum Clear Height:</b></td> <td class="prop-info"> <?php echo get_post_meta($post->ID, "Minimum Clear Height", $single = true); ?></td></tr><?php } ?>
				<?php if ( get_post_meta($post->ID, 'Name', true) ) { ?><tr><td class="prop-title"><b>Name: </b></td> <td><?php echo get_post_meta($post->ID, "Name", $single = true); ?></td></tr><?php } ?>
				<?php if ( get_post_meta($post->ID, 'Number of Suites', true) ) { ?><tr><td class="prop-title"><b>Number of Suites:</b></td> <td class="prop-info"> <?php echo get_post_meta($post->ID, "Number of Suites", $single = true); ?></td></tr><?php } ?>
				<?php if ( get_post_meta($post->ID, 'Occupancy', true) ) { ?><tr><td class="prop-title"><b>Occupancy:</b></td> <td class="prop-info"> <?php echo get_post_meta($post->ID, "Occupancy", $single = true); ?></td></tr><?php } ?>
				<?php if ( get_post_meta($post->ID, 'Office Percentage', true) ) { ?><tr><td class="prop-title"><b>Office Percentage:</b></td> <td class="prop-info"> <?php echo get_post_meta($post->ID, "Office Percentage", $single = true); ?></td></tr><?php } ?>
				<?php if ( get_post_meta($post->ID, 'Parking', true) ) { ?><tr><td class="prop-title"><b>Parking:</b></td> <td class="prop-info"> <?php echo get_post_meta($post->ID, "Parking", $single = true); ?></td></tr><?php } ?>
				<?php if ( get_post_meta($post->ID, 'Parking Ratio', true) ) { ?><tr><td class="prop-title"><b>Parking Ratio:</b></td> <td class="prop-info"> <?php echo get_post_meta($post->ID, "Parking Ratio", $single = true); ?></td></tr><?php } ?>
				<?php if ( get_post_meta($post->ID, 'Paving/Parking', true) ) { ?><tr><td class="prop-title"><b>Paving/Parking:</b></td> <td class="prop-info"> <?php echo get_post_meta($post->ID, "Paving/Parking", $single = true); ?></td></tr><?php } ?>
				<?php if ( get_post_meta($post->ID, 'Production Area', true) ) { ?><tr><td class="prop-title"><b>Production Area:</b></td> <td class="prop-info"> <?php echo get_post_meta($post->ID, "Production Area", $single = true); ?></td></tr><?php } ?>
				<?php if ( get_post_meta($post->ID, 'Property Location', true) ) { ?><tr><td class="prop-title"><b>Property Location:</b></td> <td class="prop-info"> <?php echo get_post_meta($post->ID, "Property Location", $single = true); ?></td></tr><?php } ?>
				<?php if ( get_post_meta($post->ID, 'Property Type', true) ) { ?><tr><td class="prop-title"><b>Property Type:</b></td> <td class="prop-info"> <?php echo get_post_meta($post->ID, "Property Type", $single = true); ?></td></tr><?php } ?>
				<?php if ( get_post_meta($post->ID, 'Rail', true) ) { ?><tr><td class="prop-title"><b>Rail:</b></td> <td class="prop-info"> <?php echo get_post_meta($post->ID, "Rail", $single = true); ?></td></tr><?php } ?>
				<?php if ( get_post_meta($post->ID, 'Renovation Date', true) ) { ?><tr><td class="prop-title"><b>Renovation Date:</b></td> <td class="prop-info"> <?php echo get_post_meta($post->ID, "Renovation Date", $single = true); ?></td></tr><?php } ?>
				<?php if ( get_post_meta($post->ID, 'Rentable Area', true) ) { ?><tr><td class="prop-title"><b>Rentable Area:</b></td> <td class="prop-info"> <?php echo get_post_meta($post->ID, "Rentable Area", $single = true); ?></td></tr><?php } ?>
				<?php if ( get_post_meta($post->ID, 'Rentable Square Footage', true) ) { ?><tr><td class="prop-title"><b>Rentable Square Footage:</b></td> <td class="prop-info"> <?php echo get_post_meta($post->ID, "Rentable Square Footage", $single = true); ?></td></tr><?php } ?>
				<?php if ( get_post_meta($post->ID, 'Roof', true) ) { ?><tr><td class="prop-title"><b>Roof:</b></td> <td class="prop-info"> <?php echo get_post_meta($post->ID, "Roof", $single = true); ?></td></tr><?php } ?>
				<?php if ( get_post_meta($post->ID, 'Roof Cover', true) ) { ?><tr><td class="prop-title"><b>Bay Spacing:</b></td> <td class="prop-info"> <?php echo get_post_meta($post->ID, "Bay Spacing", $single = true); ?></td></tr><?php } ?>
				<?php if ( get_post_meta($post->ID, 'SF', true) ) { ?><tr><td class="prop-title"><b>SF:</b></td> <td class="prop-info"> <?php echo get_post_meta($post->ID, "SF", $single = true); ?></td></tr><?php } ?>
				<?php if ( get_post_meta($post->ID, 'Submarket', true) ) { ?><tr><td class="prop-title"><b>Submarket:</b></td> <td class="prop-info"> <?php echo get_post_meta($post->ID, "Submarket", $single = true); ?></td></tr><?php } ?>
				<?php if ( get_post_meta($post->ID, 'Tenants', true) ) { ?><tr><td class="prop-title"><b>Tenants:</b></td> <td class="prop-info"> <?php echo get_post_meta($post->ID, "Tenants", $single = true); ?></td></tr><?php } ?>
				<?php if ( get_post_meta($post->ID, 'Total Square Feet', true) ) { ?><tr><td class="prop-title"><b>Total Square Feet:</b></td> <td class="prop-info"> <?php echo get_post_meta($post->ID, "Total Square Feet", $single = true); ?></td></tr><?php } ?>
				<?php if ( get_post_meta($post->ID, 'Trailer Storage', true) ) { ?><tr><td class="prop-title"><b>Trailer Storage:</b></td> <td class="prop-info"> <?php echo get_post_meta($post->ID, "Trailer Storage", $single = true); ?></td></tr><?php } ?>
				<?php if ( get_post_meta($post->ID, 'Truck Staging Area', true) ) { ?><tr><td class="prop-title"><b>Truck Staging Area:</b></td> <td class="prop-info"> <?php echo get_post_meta($post->ID, "Truck Staging Area", $single = true); ?></td></tr><?php } ?>
				<?php if ( get_post_meta($post->ID, 'Use', true) ) { ?><tr><td class="prop-title"><b>Use:</b></td> <td class="prop-info"> <?php echo get_post_meta($post->ID, "Use", $single = true); ?></td></tr><?php } ?>
				<?php if ( get_post_meta($post->ID, 'Ut<tr><td>ies', true) ) { ?><tr><td class="prop-title"><b>Ut<tr><td>ies:</b></td> <td class="prop-info"> <?php echo get_post_meta($post->ID, "Ut<tr><td>ies", $single = true); ?></td></tr><?php } ?>
				<?php if ( get_post_meta($post->ID, 'Year Built', true) ) { ?><tr><td class="prop-title"><b>Year Built:</b></td> <td class="prop-info"> <?php echo get_post_meta($post->ID, "Year Built", $single = true); ?></td></tr><?php } ?>
				<?php if ( get_post_meta($post->ID, 'Year Completed', true) ) { ?><tr><td class="prop-title"><b>Year Completed:</b></td> <td class="prop-info"> <?php echo get_post_meta($post->ID, "Year Completed", $single = true); ?></td></tr><?php } ?>
				<?php if ( get_post_meta($post->ID, 'Year of Construction', true) ) { ?><tr><td class="prop-title"><b>Year of Construction:</b></td> <td><?php echo get_post_meta($post->ID, "Year of Construction", $single = true); ?></td></tr><?php } ?>
				<?php if ( get_post_meta($post->ID, 'Zoning', true) ) { ?><tr><td class="prop-title"><b>Zoning:</b></td> <td class="prop-info"> <?php echo get_post_meta($post->ID, "Zoning", $single = true); ?></td></tr><?php } ?>
				<?php if ( get_post_meta($post->ID, 'Zoning Designation', true) ) { ?><tr><td class="prop-title"><b>Zoning Designation:</b></td> <td class="prop-info"> <?php echo get_post_meta($post->ID, "Zoning Designation", $single = true); ?></td></tr><?php } ?>
				</table>
