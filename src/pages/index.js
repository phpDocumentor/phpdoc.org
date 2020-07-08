import React from "react"

import Layout from "../components/layout"
import SEO from "../components/seo"
import Screenshot from "../images/screenshot.png"

const IndexPage = () => (
  <Layout>
    <SEO title="Home"/>

    <section className="phpdocumentor-section phpdocumentor-content">
      <article className="phpdocumentor-features">
        <h2>Features<small>What can phpDocumentor 3 do to help you with your documentation</small></h2>

        <section className="phpdocumentor-features__body">
          <img src={Screenshot} alt="Screenshot of what the output looks like"/>
          <ul>
            <li>Collects metadata from your code and renders API Reference documentation</li>
            <li>Renders a class diagram of your source code (GraphViz or PlantUML is required</li>
            <li>Supports all PHP syntax up, and including, to PHP 7.4</li>
            <li>Extensive support for extra information through the use of DocBlocks</li>
            <li>Rendered documentation can be used offline and online</li>
            <li>Full-text search, also works when viewing offline</li>
            <li>Easily integrated into your CI pipeline with our Github Action or Docker container</li>
          </ul>
        </section>
      </article>

    </section>
  </Layout>
);

export default IndexPage
