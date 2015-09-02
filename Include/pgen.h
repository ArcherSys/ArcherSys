<<<<<<< HEAD
#ifndef Py_PGEN_H
#define Py_PGEN_H
#ifdef __cplusplus
extern "C" {
#endif


/* Parser generator interface */

extern grammar *meta_grammar(void);

struct _node;
extern grammar *pgen(struct _node *);

#ifdef __cplusplus
}
#endif
#endif /* !Py_PGEN_H */
=======
#ifndef Py_PGEN_H
#define Py_PGEN_H
#ifdef __cplusplus
extern "C" {
#endif


/* Parser generator interface */

extern grammar *meta_grammar(void);

struct _node;
extern grammar *pgen(struct _node *);

#ifdef __cplusplus
}
#endif
#endif /* !Py_PGEN_H */
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
