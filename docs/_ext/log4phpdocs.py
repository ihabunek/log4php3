from sphinx.writers.html import HTMLTranslator

class Log4phpHTMLTranslator(HTMLTranslator):

    def visit_table(self, node):
        """ 
        Overrides default table rendering to remove border attribute and set 
        default table classes.
        TODO: See if default table classes can be moved to config file
        """
        classes = 'table table-bordered table-hover'
        self.body.append(
            self.starttag(node, 'table', CLASS=classes))
