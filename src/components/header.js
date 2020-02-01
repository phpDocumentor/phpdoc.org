import PropTypes from "prop-types"
import React from "react"
import Logo from "./logo";
import {Link} from "gatsby";
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome'
import * as Icons from "@fortawesome/free-brands-svg-icons"

const Header = ({siteTitle}) => (
    <>
        <header className="phpdocumentor-top-header">
            <nav className="phpdocumentor-section">
                <Link to="/about/"><span>About</span></Link>
                <a href="//docs.phpdoc.org/3.0/"><span>Documentation</span></a>
                <a href="//demo.phpdoc.org/3.0/"><span>Templates</span></a>
                <Link to="/contact/"><span>Contact</span></Link>
                <a href="https://twitter.com/phpdocumentor"><FontAwesomeIcon icon={Icons.faTwitter} /></a>
                <a href="https://github.com/phpdocumentor/phpdocumentor"><FontAwesomeIcon icon={Icons.faGithub} /></a>
            </nav>
        </header>
        <header className="phpdocumentor-header">
            <section className="phpdocumentor-section">
                <Link to="/" className="phpdocumentor-logo__link">
                    <Logo/>
                    <h1 className="phpdocumentor-title">
                        {siteTitle}
                        <small>Because documentation and code are meant to be together.</small>
                    </h1>
                </Link>
                {/*<p>*/}
                {/*    phpDocumentor enables you to render documentation from files in your repository. This documentation*/}
                {/*    provides an in-depth view of your project to you, your consumers and contributors.*/}
                {/*</p>*/}
            </section>
        </header>
    </>
);

Header.propTypes = {
    siteTitle: PropTypes.string,
};

Header.defaultProps = {
    siteTitle: ``,
};

export default Header
