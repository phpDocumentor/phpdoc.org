import React from "react"

import Layout from "../components/layout"
import SEO from "../components/seo"

const About = () => (
    <Layout>
        <SEO title="About"/>
        <div className="phpdocumentor-section">
            <div className="phpdocumentor-row">
                <section className="twelve phpdocumentor-columns">
                    <article>
                        <h1>About</h1>
                        <p>
                            phpDocumentor is the world standard auto-documentation tool for PHP. Written in PHP,
                            phpDocumentor can
                            be used directly from the command-line. phpDocumentor can be used to generate professional
                            documentation directly from the source code of your PHP project. Support for linking between
                            documentation, automatic class inheritance and generation of highlighted source code with
                            cross-referencing to PHP general documentation are just a few of the features of phpDocumentor.
                        </p>
                    </article>
                </section>

                <section className="twelve phpdocumentor-columns">
                    <article className="content-overview">
                        <h1>Why document at all?</h1>
                        <p>
                            In any kind of software development there will be code reuse, whether intended or not. Source
                            code
                            documentation, the comments placed in your PHP files, can act as an explanation for behavior.
                            Without
                            some kind of documentation, users are forced to make assumptions about code, or find things out
                            using
                            trial and error, or worst of all, fill your mailbox with requests. But even if you've documented
                            your
                            code well picking comments out of lines and lines of code can be tedious, and not very useful.
                        </p>
                    </article>
                </section>
            </div>
        </div>
    </Layout>
);

export default About
