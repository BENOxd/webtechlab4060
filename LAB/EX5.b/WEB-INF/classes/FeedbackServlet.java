
import java.io.IOException;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

@WebServlet("/feedback")
public class FeedbackServlet extends HttpServlet {
    private static final long serialVersionUID = 1L;

    protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
        String username = request.getParameter("username");
        String message = request.getParameter("message");

        response.setContentType("text/html");
        response.getWriter().println("<!DOCTYPE html>");
        response.getWriter().println("<html lang='en'>");
        response.getWriter().println("<head><title>Feedback Received</title></head>");
        response.getWriter().println("<body style='background-color: #0f1923; color: white; text-align: center;'>");
        response.getWriter().println("<h1>Thank You, " + username + "!</h1>");
        response.getWriter().println("<p>Your feedback:</p>");
        response.getWriter().println("<blockquote>" + message + "</blockquote>");
        response.getWriter().println("<a href='index.html' style='color: #ff4655;'>Return to Home</a>");
        response.getWriter().println("</body></html>");
    }
}
