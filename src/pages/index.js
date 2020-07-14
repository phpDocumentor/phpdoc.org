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
  </Layout>
);

export default IndexPage
