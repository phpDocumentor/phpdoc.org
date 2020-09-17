import React from "react"

import Layout from "../components/layout"
import SEO from "../components/seo"
import Screenshot from "../images/screenshot.png"

const IndexPage = () => (
  <Layout>
    <SEO title="Home"/>

    <section className="phpdocumentor-diagonal">
      <section className="phpdocumentor-section phpdocumentor-content">
        <article className="phpdocumentor-features">
          <h2>Features<small>What can phpDocumentor 3 do to help you with your documentation</small></h2>

          <img src={Screenshot} alt="Screenshot of what the output looks like"/>
          <ul className="phpdocumentor-features__list">
            <li>
              <h3>Super easy to install and use</h3>
              <p>Thanks to the power of Docker or PHAR</p>
            </li>
            <li>
              <h3>Creates Beautiful Documentation</h3>
              <p>Learns everything about your code and uses that to make sure you have the best documentation.</p>
            </li>
            <li>
              <h3>UML Class Diagrams</h3>
              <p>Gives you a UML Class Diagram for your project using PlantUML or GraphViz.</p>
            </li>
            <li>
              <h3>Supports PHP latest</h3>
              <p> Supports the latest features that PHP has to offer.</p>
            </li>
            <li>
              <h3>More control using DocBlocks</h3>
              <p>Uses the information from your DocBlocks to provide even more insight.</p>
            </li>
            <li>
              <h3>Full-Text Search</h3>
              <p>Need to find that one method? Full-text search is supported, even offline.</p>
            </li>
            <li>
              <h3>CI Support out of the box</h3>
              <p>Integrate it into your CI pipeline with our Github Action or Docker image</p>
            </li>
          </ul>
        </article>
      </section>
    </section>

    <section className="phpdocumentor-section phpdocumentor-content">
      <article>
        <h2>Usage<small>Easy to install, and to use!</small></h2>
        <p>You can use one of the following two methods</p>
        <ol>
          <li>Download our <a href="/phpDocumentor.phar">PHAR</a> file</li>
          <li>Use our very own <a href="https://hub.docker.com/r/phpdoc/phpdoc">Docker image</a>; no installation needed!</li>
        </ol>
        <section className="phpdocumentor-side-by-side">
          <section>
            <h3>Getting started using the PHAR</h3>
            <p>
              After you downloaded the PHAR file and giving it a nice and cozy place on your hard drive, don't forget to
              power it up by making it executable.
            </p>
            <code><pre>$ chmod +x phpDocumentor.phar</pre></code>
            <blockquote>
              Also, you may want to consider to rename it to <strong><code>phpdoc</code></strong>; we'll
              understand.
            </blockquote>
            <p>
              Then, all you need to do is run it!
            </p>
          </section>
          <section>
            <h3>Getting started using Docker</h3>
            <p>
              Treat our docker image like you treat all your other utility images. Just don't forgot to volume mount your
              current directory to <code>/data</code> inside the container. Remember: No data, No docs.
            </p>
            <code><pre>docker run --rm -v ${'{PWD}'}:/data phpdoc/phpdoc:3</pre></code>
            <p>
              Tada!
            </p>
          </section>
        </section>
        <aside className="phpdocumentor-admonition">
          <h5>But wait? What about composer?</h5>
          <p>
            Ah, you discovered our secret. There is a phpdocumentor composer package that you can use to install
            phpDocumentor.
          </p>
          <p>
            However: phpDocumentor is a complex application, and its libraries are used in countless other
            libraries and applications (2 of our libraries have more than 150 million downloads each); and this means that
            the chances for a conflict between one of our dependencies and yours is high. And when I say high, it is
            really high.
          </p>
          <p>
            So, because of the above: we do not endorse nor actively support installing phpDocumentor using Composer.
          </p>
        </aside>
      </article>
    </section>
  </Layout>
);

export default IndexPage
