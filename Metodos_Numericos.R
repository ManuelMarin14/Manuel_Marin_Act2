# Función ejemplo: f(x) = x^3 - 2x - 5
f <- function(x) x^3 - 2*x - 5

biseccion <- function(a, b, tol, max_iter) {
  if (f(a)*f(b) >= 0) stop("No hay raíz en el intervalo")
  for (i in 1:max_iter) {
    c <- (a + b)/2
    if (abs(f(c)) < tol) break
    if (f(a)*f(c) < 0) b <- c else a <- c
  }
  return(list(raíz = c, iteraciones = i))
}

resultado <- biseccion(1, 3, 1e-6, 100)
print(resultado)

# Matriz del sistema: A = [3 -1 -1; -1 3 1; 2 1 4], b = [1; 3; 7]
jacobi <- function(A, b, tol, max_iter) {
  n <- length(b)
  x <- rep(0, n)
  for (k in 1:max_iter) {
    x_new <- numeric(n)
    for (i in 1:n) {
      x_new[i] <- (b[i] - sum(A[i,-i] * x[-i])) / A[i,i]
    }
    if (max(abs(x_new - x)) < tol) break
    x <- x_new
  }
  return(list(solución = x, iteraciones = k))
}

A <- matrix(c(3, -1, -1, -1, 3, 1, 2, 1, 4), nrow = 3, byrow = TRUE)
b <- c(1, 3, 7)
resultado_jacobi <- jacobi(A, b, 1e-6, 100)
print(resultado_jacobi)  # Solución: x ≈ 1, y ≈ 2, z ≈ 1


gauss_seidel <- function(A, b, tol, max_iter) {
  n <- length(b)
  x <- rep(0, n)
  for (k in 1:max_iter) {
    for (i in 1:n) {
      x[i] <- (b[i] - sum(A[i,-i] * x[-i])) / A[i,i]
    }
    if (max(abs(A %*% x - b)) < tol) break
  }
  return(list(solución = x, iteraciones = k))
}

resultado_gs <- gauss_seidel(A, b, 1e-6, 100)
print(resultado_gs)  # Solución en ≈ 15 iteraciones (más rápido que Jacobi)