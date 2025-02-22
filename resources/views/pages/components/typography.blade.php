@extends('layouts.app', ['activePage' => 'typography', 'activeButton' => 'components', 'title' => 'ENERGYNO : Plataforma IoT ECOSUR', 'navName' => 'Typography' ])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="container-fluid">
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Breadcrumb 1</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Breadcrumb2</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Current Page</li>
                    </ol>
                </nav>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Light Bootstrap Table Heading</h4>
                                <p class="card-category">Created using Roboto Font Family</p>
                            </div>
                            <div class="card-body">
                                <div class="typo-line">
                                    <h1>
                                        <p class="category">Header 1</p>Light Bootstrap Table Heading </h1>
                                </div>
                                <div class="typo-line">
                                    <h2>
                                        <p class="category">Header 2</p>Light Bootstrap Table Heading</h2>
                                </div>
                                <div class="typo-line">
                                    <h3>
                                        <p class="category">Header 3</p>Light Bootstrap Table Heading</h3>
                                </div>
                                <div class="typo-line">
                                    <h4>
                                        <p class="category">Header 4</p>Light Bootstrap Table Heading</h4>
                                </div>
                                <div class="typo-line">
                                    <h5>
                                        <p class="category">Header 5</p>Light Bootstrap Table Heading</h5>
                                </div>
                                <div class="typo-line">
                                    <h6>
                                        <p class="category">Header 6</p>Light Bootstrap Table Heading</h6>
                                </div>
                                <div class="typo-line">
                                    <p>
                                        <span class="category">Paragraph</span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.</p>
                                </div>
                                <div class="typo-line">
                                    <p class="category">Quote</p>
                                    <blockquote>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.
                                        </p>
                                        <small>
                                            Steve Jobs, CEO Apple
                                        </small>
                                    </blockquote>
                                </div>
                                <div class="typo-line">
                                    <p class="category">Muted Text</p>
                                    <p class="text-muted">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.
                                    </p>
                                </div>
                                <div class="typo-line">
                                    <!--
                there are also "text-info", "text-success", "text-warning", "text-danger" clases for the text
                -->
                                    <p class="category">Coloured Text</p>
                                    <p class="text-primary">
                                        Text Primary - Light Bootstrap Table Heading and complex bootstrap dashboard you've ever seen on the internet.
                                    </p>
                                    <p class="text-info">
                                        Text Info - Light Bootstrap Table Heading and complex bootstrap dashboard you've ever seen on the internet.
                                    </p>
                                    <p class="text-success">
                                        Text Success - Light Bootstrap Table Heading and complex bootstrap dashboard you've ever seen on the internet.
                                    </p>
                                    <p class="text-warning">
                                        Text Warning - Light Bootstrap Table Heading and complex bootstrap dashboard you've ever seen on the internet.
                                    </p>
                                    <p class="text-danger">
                                        Text Danger - Light Bootstrap Table Heading and complex bootstrap dashboard you've ever seen on the internet.
                                    </p>
                                </div>
                                <div class="typo-line">
                                    <h2>
                                        <p class="category">Small Tag</p>header with small subcard-title
                                        <br>
                                        <small>".small" is a tag for the headers</small>
                                    </h2>
                                </div>
                                <div class="typo-line">
                                    <p class="category">Lists</p>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h5>Unordered List</h5>
                                            <ul>
                                                <li>List Item</li>
                                                <li>List Item</li>
                                                <li class="list-unstyled">
                                                    <ul>
                                                        <li>List Item</li>
                                                        <li>List Item</li>
                                                        <li>List Item</li>
                                                    </ul>
                                                </li>
                                                <li>List Item</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <h5>Ordered List</h5>
                                            <ol>
                                                <li>List Item</li>
                                                <li>List Item</li>
                                                <li>List Item</li>
                                            </ol>
                                        </div>
                                        <div class="col-md-3">
                                            <h5>Unstyled List</h5>
                                            <ul class="list-unstyled">
                                                <li>List Item</li>
                                                <li>List Item</li>
                                                <li>List Item</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <h5>Inline List</h5>
                                            <ul class="list-inline">
                                                <li>List Item</li>
                                                <li>List Item</li>
                                                <li>List Item</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="typo-line">
                                    <p class="category">Blockquotes</p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h5>Default Blockquote</h5>
                                            <blockquote>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                            </blockquote>
                                        </div>
                                        <div class="col-md-6">
                                            <h5>Blockquote with Citation</h5>
                                            <blockquote>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                                <small>Someone famous in
                                                    <cite card-title="Source card-title">Source card-title</cite>
                                                </small>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                                <div class="typo-line">
                                    <p class="category">Code</p>
                                    <p>This is
                                        <code>.css-class-as-code</code>, an example of an inline code element. Wrap inline code within a
                                        <code> &lt;code&gt;...&lt;/code&gt;</code>tag.</p>
                                    <pre>1. #This is an example of preformatted text.
                        2. #Here is another line of code</pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection