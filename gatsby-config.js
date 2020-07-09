module.exports = {
  pathPrefix: `/${process.env.VERSION}`,
  siteMetadata: {
    title: `phpDocumentor`,
    description: `Documentation Generator for PHP`,
    author: `@phpDocumentor`
  },
  plugins: [
    `gatsby-plugin-react-helmet`,
    {
      resolve: `gatsby-source-filesystem`,
      options: {
        name: `images`,
        path: `${__dirname}/src/images`,
      },
    },
    `gatsby-transformer-sharp`,
    `gatsby-plugin-sharp`,
    {
      resolve: `gatsby-plugin-manifest`,
      options: {
        name: `phpdocumentor`,
        short_name: `phpdocumentor`,
        start_url: `/`,
        background_color: `#8dd35f`,
        theme_color: `#8dd35f`,
        display: `minimal-ui`,
        icon: `src/images/favicon.png`, // This path is relative to the root of the site.
      },
    },
    {
      resolve: `gatsby-plugin-prefetch-google-fonts`,
      options: {
        fonts: [
          {
            family: `Source Sans Pro`,
            variants: ['400', '600', '700', '900']
          },
        ],
      },
    }
    // this (optional) plugin enables Progressive Web App + Offline functionality
    // To learn more, visit: https://gatsby.dev/offline
    // `gatsby-plugin-offline`,
  ],
}
