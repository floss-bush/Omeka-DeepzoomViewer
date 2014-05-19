<h3>Public Theme</h3>
<label for="deepzoomviewer_width_public">Viewer width, in pixels:</label>
<p><?php echo __v()->formText('deepzoomviewer_width_public', 
                              get_option('deepzoomviewer_width_public'), 
                              array('size' => 5));?></p>
<label for="deepzoomviewer_height_public">Viewer height, in pixels:</label>
<p><?php echo __v()->formText('deepzoomviewer_height_public', 
                              get_option('deepzoomviewer_height_public'), 
                              array('size' => 5));?></p>
