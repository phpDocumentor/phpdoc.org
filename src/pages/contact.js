import React from "react"

import Layout from "../components/layout"
import SEO from "../components/seo"

const Contact = () => (
    <Layout>
        <SEO title="Contact"/>
        <section className="phpdocumentor-section">
            <section className="phpdocumentor-row">
                <article className="content-overview">
                    <h1>Contact</h1>
                    <p>Got a question? Need some help? You can find help at several locations:</p>
                    <table>
                        <tr>
                            <th className="phpdocumentor-heading">Documentation</th>
                            <td className="phpdocumentor-cell"><a href="/docs/latest">Documentation</a></td>
                        </tr>
                        <tr>
                            <th className="phpdocumentor-heading">Twitter</th>
                            <td className="phpdocumentor-cell"><a href="https://twitter.com/phpdocumentor">@phpdocumentor</a></td>
                        </tr>
                        <tr>
                            <th className="phpdocumentor-heading">Github</th>
                            <td className="phpdocumentor-cell"><a href="https://github.com/phpDocumentor/phpDocumentor/issues">https://github.com/phpDocumentor/phpDocumentor/issues</a></td>
                        </tr>
                        <tr>
                            <th className="phpdocumentor-heading">Mailing list</th>
                            <td className="phpdocumentor-cell"><a
                                href="https://groups.google.com/forum/#!forum/phpdocumentor">groups.google.com/forum/#!forum/phpdocumentor</a>
                            </td>
                        </tr>
                    </table>
                </article>
            </section>
        </section>
    </Layout>
);

export default Contact
