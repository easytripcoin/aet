<?php
defined('_JEXEC') or die;

try {
	// Get the Joomla application instance
	$app = JFactory::getApplication();

	// Set the MIME type and document type
	$document = JFactory::getDocument();
	$document->setMimeEncoding('text/html');
	$document->setType('html');

	// Define the HTML content
	$html = '<!DOCTYPE html>
            <html lang="en">
            <head>
              <meta charset="UTF-8">
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <title>Standalone Bootstrap 5 Jumi Page</title>
            
              <!-- Bootstrap 5 CSS CDN -->
              <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
            </head>
            <body>
            
              <div class="container">
                <h1 class="mb-4">Standalone Bootstrap 5 Jumi Page!</h1>
            
                <div class="row">
                  <div class="col-md-6">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">Card 1</h5>
                        <p class="card-text">This is a simple Bootstrap card.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">Card 2</h5>
                        <p class="card-text">Another card with some content.</p>
                        <a href="#" class="btn btn-secondary">Another action</a>
                      </div>
                    </div>
                  </div>
                </div>
            
                <hr class="my-4">
            
                <p>This page is generated by Jumi, but overrides the parent Joomla template.</p>
				<p><img src="images/gcash.jpg"></p>
                
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Launch demo modal
                 </button>
            
              </div>
            
             <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    This is a modal content using bootstrap 5
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
                
              <!-- Bootstrap 5 JS and Popper.js CDN -->
              <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
              <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
            
            </body>
            </html>';

	// Output the HTML directly
	echo $html;

	// Close the Joomla application to prevent further processing
	$app->close();

} catch (Exception $e) {
	echo "Error: " . $e->getMessage();
}